<?php
class User {

 public function __construct() {

 }

 public function createUsers($email, $firstName, $lastName, $userName, $pass, $age, $roles_id, $gender_id, $apps_countries_id) {
 	// Connecting to Database
  $db = $GLOBALS['gdb'];
  $mysqli = $db->getConnection();

 	// prepare and bind
 	$stmt = $mysqli->prepare("INSERT INTO User(email, password, userName, firstName, lastName, age, roles_id, gender_id, apps_countries_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
 	$stmt->bind_param("sssssiiii", $email, $pass, $userName, $firstName, $lastName, $age, $roles_id, $gender_id, $apps_countries_id);

  $cost = 10;
  $salt = strtr(base64_encode(mcrypt_create_iv(16, MCRYPT_DEV_URANDOM)), '+', '.');
  $salt = sprintf("$2a$%02d$", $cost) . $salt;
  $hash = crypt($pass, $salt);

 	$stmt->execute();

 	$stmt->close();
 	$mysqli->close();
  header('Location: ../dashboard.php');
 }

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

}
?>
