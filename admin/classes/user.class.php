<?php
class User {
 private $_db;
 private $_mysqli;

 public function __construct() {

 }

 public function createUsers($firstname, $lastname, $email) {
 	// Connecting to Database
  $db = $GLOBALS['gdb'];
  $mysqli = $db->getConnection();

 	// prepare and bind
 	$stmt = $mysqli->prepare("INSERT INTO users(firstname, lastname, email) VALUES (?, ?, ?)");
 	$stmt->bind_param("sss", $firstname, $lastname, $email);

 	$stmt->execute();

 	//echo "New records created successfully";


 	$stmt->close();
 	$mysqli->close();
  header('Location: ./users.php');
 }

 public function getAllUsers() {
   // Connecting to Database
   $db = $GLOBALS['gdb'];
   $mysqli = $db->getConnection();

  	// prepare and bind
  	$stmt = $mysqli->prepare("SELECT user_id, firstname, lastname, username, email, status FROM users");
    $stmt->execute();
    $stmt->bind_result($userid, $firstname, $lastname, $username, $email, $status);


    //var_dump($stmt);
    while (mysqli_stmt_fetch($stmt)) {
      if($status === 1) {
        $status = '<span class="tag tag-success">Active</span>';
      } else {
        $status = '<span class="tag tag-warning">Inactive</span>';
      }

      echo '<tr>';
        echo '<th scope="row">' .$userid. '<td>' .$firstname. '</td> <td>' . $lastname.'</td><td>' .$username.'</td><td>' .$email.'</td><td>' .$status.'</td><td><a class="btn btn-primary btn-sm m-r-1" href="edituser.php?edit=true&userid='.$userid.'"><i class="fa fa-pencil" aria-hidden="true"></i></a><a class="btn btn-danger btn-sm" href="users.php?delete=true&userid='.$userid.'"><i class="fa fa-trash" aria-hidden="true"></i></a></td>';
      echo '</tr>';
    }

   /**
     * Close connection
   */
   $stmt->close();
   $mysqli->close();

 }

 // Get all user info from user table by user_id
 public function getUserById($userid) {
   // Connecting to Database
   $db = $GLOBALS['gdb'];
   $mysqli = $db->getConnection();

  	// prepare and bind
  	$stmt = $mysqli->prepare("SELECT firstname, lastname, username, email, status FROM users	WHERE user_id = ?");
    $stmt->bind_param('i', $userid);
    $stmt->execute();
    $stmt->bind_result($firstname, $lastname, $username, $email, $status);

    // Only returning info from 1 user so I will create an array that I can easily work with on my page.
    $userArr;
    while ($stmt->fetch()) {
      $userArr['firstname'] = $firstname;
      $userArr['lastname'] = $lastname;
      $userArr['username'] = $username;
      $userArr['email'] = $email;
      $userArr['status'] = $status;
    }

   // Close connection
   $stmt->close();
   $mysqli->close();
   return $userArr;
 }

 public function updateUser($userid, $firstname, $lastname, $username, $password, $email, $status) {
  // Connecting to Database
  $db = $GLOBALS['gdb'];
  $mysqli = $db->getConnection();

  // prepare and bind
  $stmt = $mysqli->prepare("UPDATE users SET firstname=?, lastname=?, username=?, password=?, email=?, status=? WHERE user_id=?");
  $stmt->bind_param("sssssii", $firstname, $lastname, $username, $password, $email, $status, $userid);
  $stmt->execute();

  $stmt->close();
  //$mysqli->close();
  //header('Location: ./users.php?updated=true');
 }

 public function deleteUser($userid) {
  // Connecting to Database
  $db = $GLOBALS['gdb'];
  $mysqli = $db->getConnection();

  // prepare and bind
  $stmt = $mysqli->prepare("DELETE FROM users WHERE user_id=? LIMIT 1");
  $stmt->bind_param("i", $userid);
  $stmt->execute();

  $stmt->close();
  //$mysqli->close();
  //header('Location: ./users.php?updated=true');
 }

}
?>
