<?php
class anonTest {
 private $_db;
 private $_mysqli;

 public function __construct() {
 }

 public function getTextures(){
   $db = $GLOBALS['gdb'];
   $mysqli = $db->getConnection();

   $stmt = $mysqli->prepare('SELECT id, texture, description, title FROM texture');
   $stmt->execute();
   $stmt->bind_result($id, $texture, $description, $title);

  while ($row = $stmt->fetch()) {
    echo "<input class='texture-radio ".$title."' type='radio' name='".$title."' value='".$id."'/>";
  }

  //  $stmt-close();
  //  $mysqli->close();
}

public function getShades(){
  $db = $GLOBALS['gdb'];
  $mysqli = $db->getConnection();

  $stmt = $mysqli->prepare('SELECT id, name, description FROM shade');
  $stmt->execute();
  $stmt->bind_result($id, $name, $description);

 while ($row = $stmt->fetch()) {
   echo "<input class='shade-radio ".$name."' type='radio' name='".$id."' value='".$id."'/>";
 }

 //  $stmt-close();
 //  $mysqli->close();
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
 // 	$mysqli->close();
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
