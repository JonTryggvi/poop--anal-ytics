<?php
class User {

 public function __construct() {

 }

 public function createUsers($email, $firstName, $lastName, $userName, $pass, $age, $roles_id, $gender_id, $apps_countries_id, $user_date) {
 	// Connecting to Database
  $db = $GLOBALS['gdb'];
  $mysqli = $db->getConnection();

  $cost = 10;
  $salt = strtr(base64_encode(mcrypt_create_iv(16, MCRYPT_DEV_URANDOM)), '+', '.');
  $salt = sprintf("$2a$%02d$", $cost) . $salt;
  $hash = crypt($pass, $salt);

 	// prepare and bind
 	$stmt = $mysqli->prepare("INSERT INTO User(email, password, userName, firstName, lastName, user_date, age, roles_id, gender_id, apps_countries_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
 	$stmt->bind_param("ssssssiiii", $email, $pass, $userName, $firstName, $lastName, $user_date, $age, $roles_id, $gender_id, $apps_countries_id);



 	$stmt->execute();

  $stmt = $mysqli->prepare("SELECT id FROM User ORDER BY id DESC LIMIT 1");
  $stmt->execute();

  $stmt->bind_result($id);
  while ($stmt->fetch()){
    $diary_id = $id;
  }

  $stmt = $mysqli->prepare("INSERT INTO diary (title, content, date, User_id) VALUES ('New user', 'This is your first diary record! Feel free to delete it ', now(), $diary_id )");
  $stmt->execute();
 	$stmt->close();
 // 	$mysqli->close();
  // header('Location: ../dashboard.php');
 }

 public function updateUserProfile($target_file){

   $db = $GLOBALS['gdb'];
   $mysqli = $db->getConnection();

   $userid = 	$_SESSION['User_id'];

   // prepare and bind
   $stmt = $mysqli->prepare("UPDATE User SET profile_img=? WHERE id=?");

   $stmt->bind_param("si", $target_file, $userid);
   $stmt->execute();

   $stmt->close();

 }

 public function updateUserIconProfile(){

   $db = $GLOBALS['gdb'];
   $mysqli = $db->getConnection();
   if(isset($_SESSION['User_id'])){
   $userid = 	$_SESSION['User_id'];
   error_log($userid);

   // prepare and bind
   $stmt = $mysqli->prepare("SELECT profile_img FROM User WHERE id= $userid");

   $stmt->bind_result($profile_img);
   $stmt->execute();


   while (mysqli_stmt_fetch($stmt)) {

     echo '<div><img class="default-user" data-toggle="modal" data-target="#myModal" src="'.$profile_img.'"/></div>';
   }

   $stmt->close();
 } else{
   echo '<div class="user-login-signup">
     <a class="nav-link" href="login.php"><img class="user-icon" src="../../img/icons/user.svg" alt=""></a>
   </div>';
 }

 }

 // public function deleteUserImage() {
 //   // Connecting to Database
 //   $db = $GLOBALS['gdb'];
 //   $mysqli = $db->getConnection();
 //
 //   // prepare and bind
 //   $stmt = $mysqli->prepare("DELETE FROM User WHERE profile_img WHERE id=?");
 //   $stmt->bind_param("i", $userid);
 //   $stmt->bind_result($profile_img);
 //   $stmt->execute();
 //
 //
 //   $stmt->close();
 //   //$mysqli->close();
 //   //header('Location: ./users.php?updated=true');
 //  }

public function countries(){

   $db = $GLOBALS['gdb'];
   $mysqli = $db->getConnection();

  //  // prepare and bind
   $stmt = $mysqli->prepare("SELECT id, country_code, country_name FROM apps_countries");
   $stmt->execute();
   $stmt->bind_result($id, $country_code, $country_name);

    while (mysqli_stmt_fetch($stmt)) {

      echo '<option value="'.$id.'">';
        echo  $country_name;
      echo '</option>';
        }

   //echo "New records created successfully";

   $stmt->close();
   //$mysqli->close();

 }

 public function Gender(){

    $db = $GLOBALS['gdb'];
    $mysqli = $db->getConnection();

    $stmt = $mysqli->prepare("SELECT id, gender FROM gender");
    $stmt->execute();
    $stmt->bind_result($id, $gender);

     while (mysqli_stmt_fetch($stmt)) {

       echo '<option value="'.$id.'">';
         echo $gender;
       echo '</option>';
         }

    //echo "New records created successfully";

    $stmt->close();
  }

  public function emailCheck($email) {
    // Connecting to Database
    $db = $GLOBALS['gdb'];
    $mysqli = $db->getConnection();

     // prepare and bind
     $stmt = $mysqli->prepare("SELECT email FROM User	WHERE email = ?");
     $stmt->bind_param('s', $email);
     $stmt->execute();
     $stmt->bind_result($_email);
     $stmt->store_result();
     $numberofrows = $stmt->num_rows;

     $stmt->close();
     return $numberofrows;

    // Close connection
    //$mysqli->close();

  }

  public function showAllUsers(){

     $db = $GLOBALS['gdb'];
     $mysqli = $db->getConnection();

    //  // prepare and bind
     $stmt = $mysqli->prepare("SELECT id, email, firstName, lastName, userName FROM User");
     $stmt->execute();
     $stmt->bind_result($userid, $email, $firstName, $lastName, $userName);

      while (mysqli_stmt_fetch($stmt)) {

        echo '<tr>';
        echo '<th scope="row">' .$email. '<td>' .$lastName. '</td> <td>' . $firstName.'</td><td>' .$lastName.'</td><td>' .$email.'</td><td>' .$userName.'</td><td><a class="btn btn-primary btn-sm m-r-1" href="edituser.php?edit=true&userid='.$userid.'"><i class="fa fa-pencil" aria-hidden="true"></i></a><a class="btn btn-danger btn-sm" href="users.php?deleteuser=true&userid='.$userid.'"><i class="fa fa-trash" aria-hidden="true"></i></a></td>';
      echo '</tr>';
          }

     //echo "New records created successfully";

     $stmt->close();
     //$mysqli->close();

   }

  public function updateUser($userid, $firstName, $lastName, $userName, $email, $pass, $roles_id) {
  // Connecting to Database
  $db = $GLOBALS['gdb'];
  $mysqli = $db->getConnection();



  // prepare and bind
  $stmt = $mysqli->prepare("UPDATE User SET firstName=?, lastName=?, userName=?, email=?, password=?, roles_id=? WHERE id=?");
  $stmt->bind_param("sssssii", $firstName, $lastName, $userName, $email, $pass, $roles_id, $userid);
  $stmt->execute();


  $stmt->close();
  //$mysqli->close();
  //header('Location: ./users.php?updated=true');
 }

 public function getUserById($userid) {
  // Connecting to Database
  $db = $GLOBALS['gdb'];
  $mysqli = $db->getConnection();

   // prepare and bind
   $stmt = $mysqli->prepare("SELECT firstName, lastName, userName, email, roles_id FROM User WHERE id = ?");
   $stmt->bind_param('i', $userid);
   $stmt->execute();
   $stmt->bind_result($firstName, $lastName, $userName, $emails, $roles_id);

   // Only returning info from 1 user so I will create an array that I can easily work with on my page.
   $userArr;
   while ($stmt->fetch()) {
     $userArr['firstName'] = $firstName;
     $userArr['lastName'] = $lastName;
     $userArr['userName'] = $userName;
     $userArr['email'] = $email;
     $userArr['roles_id'] = $roles_id;
   }


  // Close connection
  $stmt->close();
  // $mysqli->close();
  return $userArr;
}

public function deleteUser($userid) {
  // Connecting to Database
  $db = $GLOBALS['gdb'];
  $mysqli = $db->getConnection();

  // prepare and bind
  $stmt = $mysqli->prepare("DELETE FROM User WHERE id=? LIMIT 1");
  $stmt->bind_param("i", $userid);
  $stmt->execute();


  $stmt->close();
  //$mysqli->close();
  //header('Location: ./users.php?updated=true');
 }


}
?>
