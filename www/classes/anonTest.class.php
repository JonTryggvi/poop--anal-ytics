<?php
class anonTest {
 private $_db;
 private $_mysqli;

 public function __construct() {
 }

 public function getTextures(){
   $db = $GLOBALS['gdb'];
   $mysqli = $db->getConnection();

   $stmt = $mysqli->prepare("SELECT id, texture FROM texture");
   $stmt->execute();
   $stmt->bind_result();

  echo "<h1>TEST</H1>";

   $stmt-close();
 }

 public function anonTextures($texture_id, $shade_id) {
 	// Connecting to Database
  $db = $GLOBALS['gdb'];
  $mysqli = $db->getConnection();

 	// prepare and bind
 	$stmt = $mysqli->prepare("INSERT INTO test(shade_id, texture_id) VALUES (?,?)");
 	$stmt->bind_param("ss",$shade_id, $texture_id);
 	$stmt->execute();

 // 	echo "New records created successfully";

 	$stmt->close();
 	$mysqli->close();
  // header('Location: ../dashboard.php');
 }


//  public function deleteUser($userid) {
//   // Connecting to Database
//   $db = $GLOBALS['gdb'];
//   $mysqli = $db->getConnection();
//
//   // prepare and bind
//   $stmt = $mysqli->prepare("DELETE FROM users WHERE user_id=? LIMIT 1");
//   $stmt->bind_param("i", $userid);
//   $stmt->execute();
//
//   $stmt->close();
//   //$mysqli->close();
//   //header('Location: ./users.php?updated=true');
//  }
//
 }
?>
