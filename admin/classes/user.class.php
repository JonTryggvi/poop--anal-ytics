<?php
class User {
 private $_db;
 private $_mysqli;

 public function __construct() {

 }

 public function createUsers($firstName, $lastName, $email, $userName, $pass, $user_date, $age, $profile_img, $roles_id, $gender_id, $apps_countries_id) {

  $db = $GLOBALS['gdb'];
  $mysqli = $db->getConnection();


 	$stmt = $mysqli->prepare("INSERT INTO User(email, password, userName, firstName, lastName, user_date, age, profile_img, roles_id, gender_id, apps_countries_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
 	$stmt->bind_param("sssssiisiii", $email, $password, $userName, $firstName, $lastName, $user_date, $age, $profile_img, $roles_id, $gender_id, $apps_countries_id);

 	$stmt->execute();



 	$stmt->close();
 	$mysqli->close();
  header('Location: ./users.php');
 }

 // public function getAllUsers() {
   // Connecting to Database
  //  $db = $GLOBALS['gdb'];
  //  $mysqli = $db->getConnection();

  	// prepare and bind
  	// $stmt = $mysqli->prepare("SELECT id, firstname, lastname, username, email, FROM User");
    // $stmt->execute();
    // $stmt->bind_result($firstName, $lastName, $username, $email);


    //var_dump($stmt);
    // while (mysqli_stmt_fetch($stmt)) {
    //   if($status === 1) {
    //     $status = '<span class="tag tag-success">Active</span>';
    //   } else {
    //     $status = '<span class="tag tag-warning">Inactive</span>';
    //   }
    //
    //   echo '<tr>';
    //     echo '<th scope="row">' .$userid. '<td>' .$firstName. '</td> <td>' . $lastName.'</td><td>' .$username.'</td><td>' .$email.'</td><td>' .$status.'</td><td><a class="btn btn-primary btn-sm m-r-1" href="edituser.php?edit=true&userid='.$userid.'"><i class="fa fa-pencil" aria-hidden="true"></i></a><a class="btn btn-danger btn-sm" href="users.php?delete=true&userid='.$userid.'"><i class="fa fa-trash" aria-hidden="true"></i></a></td>';
    //   echo '</tr>';
    // }

   /**
     * Close connection
   */
 //   $stmt->close();
 //   $mysqli->close();
 //
 // }

 // Get all user info from user table by user_id
 // public function getUserById($userid) {
   // Connecting to Database
  //  $db = $GLOBALS['gdb'];
  //  $mysqli = $db->getConnection();

  	// prepare and bind
  	// $stmt = $mysqli->prepare("SELECT firstname, lastname, username, email, status FROM users	WHERE user_id = ?");
    // $stmt->bind_param('i', $userid);
    // $stmt->execute();
    // $stmt->bind_result($firstname, $lastname, $username, $email, $status);

    // Only returning info from 1 user so I will create an array that I can easily work with on my page.
    // $userArr;
    // while ($stmt->fetch()) {
    //   $userArr['firstname'] = $firstname;
    //   $userArr['lastname'] = $lastname;
    //   $userArr['username'] = $username;
    //   $userArr['email'] = $email;
    //   $userArr['status'] = $status;
    // }

   // Close connection
 //   $stmt->close();
 //   $mysqli->close();
 //   return $userArr;
 // }

 // public function updateUser($userid, $firstname, $lastname, $username, $password, $email, $status) {
  // Connecting to Database
  // $db = $GLOBALS['gdb'];
  // $mysqli = $db->getConnection();

  // prepare and bind
  // $stmt = $mysqli->prepare("UPDATE users SET firstname=?, lastname=?, username=?, password=?, email=?, status=? WHERE user_id=?");
  // $stmt->bind_param("sssssii", $firstname, $lastname, $username, $password, $email, $status, $userid);
  // $stmt->execute();
  //
  // $stmt->close();
  //$mysqli->close();
  //header('Location: ./users.php?updated=true');
 // }

 // public function deleteUser($userid) {
  // Connecting to Database
  // $db = $GLOBALS['gdb'];
  // $mysqli = $db->getConnection();

  // prepare and bind
  // $stmt = $mysqli->prepare("DELETE FROM users WHERE user_id=? LIMIT 1");
  // $stmt->bind_param("i", $userid);
  // $stmt->execute();
  //
  // $stmt->close();
  //$mysqli->close();
  //header('Location: ./users.php?updated=true');
 // }

}
?>
