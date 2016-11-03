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
    echo "<input class='texture-radio ".$title."' type='radio' name='texture' value='".$id."'/>";
  }


  //  $stmt-close();
  //  $mysqli->close();
}

public function textureResult($t){

  $db = $GLOBALS['gdb'];
  $mysqli = $db->getConnection();

  $stmt = $mysqli->prepare("SELECT id, texture, description, title FROM texture WHERE id=$t");
  $stmt->execute();
  $stmt->bind_result($id, $texture, $description, $title);

  error_log("id er :".$t);
  while ($row = $stmt->fetch()) {
   echo "<p>.$description.</p>";
 }
}

public function getShades(){
  $db = $GLOBALS['gdb'];
  $mysqli = $db->getConnection();

  $stmt = $mysqli->prepare('SELECT id, name, description FROM shade');
  $stmt->execute();
  $stmt->bind_result($id, $name, $description);

 while ($row = $stmt->fetch()) {
   echo "<input class='shade-radio ".$name."' type='radio' name='shade' value='".$id."'/>";
 }

 //  $stmt-close();
 //  $mysqli->close();
}




 public function anonTextures($texture_id, $shade_id) {
 	// Connecting to Database
  $db = $GLOBALS['gdb'];
  $mysqli = $db->getConnection();
 	// prepare and bind
 	$stmt = $mysqli->prepare("INSERT INTO test (User_id,diary_id, UserAnon_id, date) VALUES (210,7,1,now())");
  // error_log("villa : ".$stmt->id);
 // 	$stmt->bind_param("ii",$shade_id, $texture_id);
 	$stmt->execute();
  $stmt = $mysqli->prepare("SELECT id FROM test WHERE User_id=210");
  $stmt->execute();
  $stmt->bind_result($id);
  while ($stmt->fetch()){
    $test_id = $id;
  }
  // error_log("id er :".$testId);
	$stmt = $mysqli->prepare("INSERT INTO test_has_shade (shade_id,test_id) VALUES (?, ?)");
  $stmt->bind_param("ii", $shade_id, $test_id);
  $stmt->execute();
  $stmt = $mysqli->prepare("INSERT INTO test_has_texture (texture_id,test_id) VALUES (?, ?)");
  $stmt->bind_param("ii", $texture_id, $test_id);
  $stmt->execute();
  // $stmt= $mysqli-prepare("INSERT INTO");

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
