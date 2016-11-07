<?php
class userTest {
 private $_db;
 private $_mysqli;

 public function __construct() {
 }

 public function getTextures(){
   $db = $GLOBALS['gdb'];
   $mysqli = $db->getConnection();

   $stmt = $mysqli->prepare('SELECT id, texture, description, title, iconUrl FROM texture');
   $stmt->execute();
   $stmt->bind_result($id, $texture, $description, $title, $iconUrl);

  echo "<div class='texture-container'>";
    while ($row = $stmt->fetch()) {
      echo "<div class='radio-texture-container'>";
        echo "<input id='".$title."' class='texture-radio ".$title."' type='radio' name='texture' value='".$id."'/>";
        echo "<label for='".$title."'></label>";
        echo "<div class='check'><img src='../".$iconUrl."'/></div>";
      echo "</div>";
    }
  echo "</div>";
  //  $stmt-close();
  //  $mysqli->close();
}



public function getShades(){
  $db = $GLOBALS['gdb'];
  $mysqli = $db->getConnection();


  $stmt = $mysqli->prepare('SELECT id, name, description, iconUrl FROM shade');
  $stmt->execute();
  $stmt->bind_result($id, $name, $description, $iconUrl);
  echo "<div class='shade-container'>";
   while ($row = $stmt->fetch()) {
     echo "<div class='radio-shade-container'>";
      echo "<input id='".$id."' class='shade-radio ".$name."' type='radio' name='shade' value='".$id."'/>";

      echo "<label for='".$id."'></label>";
      echo "<div class='check'><img src='../".$iconUrl."'/></div>";
    echo "</div>";
   }
  echo "</div>";

   //  $stmt-close();
   //  $mysqli->close();
  }

public function resultsIcons($t, $s){
  $db = $GLOBALS['gdb'];
  $mysqli = $db->getConnection();

  $stmt = $mysqli->prepare("SELECT id, name, description, iconUrl FROM shade WHERE id=$s");
  $stmt->execute();
  $stmt->bind_result($id, $name, $description, $iconUrl);

  while ($row = $stmt->fetch()) {
    echo "<div class='test-message col-md-5'>";
    if($id==1){
      echo "<div><h1>Congrautlations</h1></div>";
      echo "<h2>Your day is not so shitty...</H2>";
    }elseif($id==2){
      echo "<div><h1>Not to bad....</h1></div>";
      echo "<h2>but kinda green... which is never nice...</h2>";
    }elseif($id==3){
      echo "<div><h1>hmmm....</h1></div>";
      echo "<h2>You probaly stink!</H2>";
    }elseif($id==4){
      echo "<div><h1>Hang on there!</h1></div>";
      echo "<h2>Internal bleeding?!?</H2>";
    }elseif($id==5){
      echo "<div><h1>Eawwww....</h1></div>";
      echo "<h2>You should call a doctor</H2>";
    }elseif($id==6){
      echo "<div><h1>Fuck!!!</h1></div>";
      echo "<h2>CALL AN AMBULANCE!!!</H2>";
    }

  echo "</div><div class='col-md-7'> <div class='shadeIcon'><img src='../".$iconUrl."'/></div>";
  }

  $stmt = $mysqli->prepare("SELECT id, texture, description, title, iconUrl FROM texture WHERE id=$t");
  $stmt->execute();
  $stmt->bind_result($id, $texture, $description, $title, $iconUrl);
  while ($row = $stmt->fetch()){
    echo "<div class='theCross'></div><div class='textureIcon icon-".$title."'><img src='../".$iconUrl."'/></div></div>";
  }
}

public function textureResult($t, $s){
  $db = $GLOBALS['gdb'];
  $mysqli = $db->getConnection();

  $stmt = $mysqli->prepare("SELECT id, texture, description, title FROM texture WHERE id=$t");
  $stmt->execute();
  $stmt->bind_result($id, $texture, $description, $title);
  // error_log("id er :".$t);
  while ($row = $stmt->fetch()) {
   echo "<div class='col-md-12'><p><strong>$texture:</strong> $description</p></div>";
  }

  $stmt = $mysqli->prepare("SELECT id, name, description FROM shade WHERE id=$s");
  $stmt->execute();
  $stmt->bind_result($id, $name, $description);

  while ($row = $stmt->fetch()) {
  echo "<div class='col-md-12 '><p><strong>$name:</strong> $description</p></div>";
  echo "<button type='button' class='col-md-8 centerme'>Share your shit!</button>";
  }


}


//hér setjum við inn í test töfluna niðurstöður úr prófi þegar notandi er óþekktur. Það kom á daginn að taflan userAnon var óþörf eða nýtist ekki vel þannig að ég brá á það ráð að búa til notanda sem gegnir því hlutverki að vera óþekktur.
 public function anonTextures($texture_id, $shade_id) {
 	// Connecting to Database
  $db = $GLOBALS['gdb'];
  $mysqli = $db->getConnection();
  $userId = $_SESSION['User_id'];
  $userRole = $_SESSION['User_roles_id'];

 	// prepare and bind
 	$stmt = $mysqli->prepare("INSERT INTO test (User_id,diary_id, UserAnon_id, date) VALUES ($userId,7,$userRole,now())");

 	$stmt->execute();
  $stmt = $mysqli->prepare("SELECT id FROM test WHERE User_id=$userId");
  $stmt->execute();
  $stmt->bind_result($id);
  while ($stmt->fetch()){
    $test_id = $id;
  }

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


 }
?>
