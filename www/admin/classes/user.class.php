<?php
class User {
 private $_db;
 private $_mysqli;

 public function __construct() {

 }

 public function createUsers($email, $firstName, $lastName, $userName, $pass, $age, $profile_img, $roles_id, $gender_id, $apps_countries_id, $user_date) {
 	// Connecting to Database
  $db = $GLOBALS['gdb'];
  $mysqli = $db->getConnection();

 	// prepare and bind
 	$stmt = $mysqli->prepare("INSERT INTO User(email, password, userName, firstName, lastName, user_date, age, profile_img, roles_id, gender_id, apps_countries_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
 	$stmt->bind_param("ssssssisiii", $email, $pass, $userName, $firstName, $lastName, $user_date, $age, $profile_img, $roles_id, $gender_id, $apps_countries_id);

 	$stmt->execute();

 	//echo "New records created successfully";

 	$stmt->close();
 	$mysqli->close();
  header('Location: ../dashboard.php');
 }

public function countries(){

   $db = $GLOBALS['gdb'];
   $mysqli = $db->getConnection();

   // prepare and bind
   $stmt = $mysqli->prepare("SELECT country_code, country_name FROM apps_countries");
   $stmt->execute();
   $stmt->bind_result($country_code, $country_name);

    while (mysqli_stmt_fetch($stmt)) {

      echo '<option>';
        echo  $country_name;
      echo '</option>';
        }

   //echo "New records created successfully";

   $stmt->close();
   $mysqli->close();

 }

 public function Gender(){

    $db = $GLOBALS['gdb'];
    $mysqli = $db->getConnection();

    // prepare and bind
    $stmt = $mysqli->prepare("SELECT gender FROM gender");
    $stmt->execute();
    $stmt->bind_result($gender);

     while (mysqli_stmt_fetch($stmt)) {

       echo '<option  style="width:350px;">';
         echo  $gender;
       echo '</option>';
         }

    //echo "New records created successfully";


  }



}
?>
