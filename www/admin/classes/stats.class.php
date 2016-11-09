<?php
class stats {
 private $_db;
 private $_mysqli;

 public function __construct() {
 }




function getStats($id, $col) {
 // Connecting to Database
 $db = $GLOBALS['gdb'];
 $mysqli = $db->getConnection();
 $stmt = $mysqli->prepare("SELECT test.id, test.User_id, shade.name, shade.id FROM test JOIN test_has_shade ON test.id = test_has_shade.test_id JOIN shade ON test_has_shade.shade_id = shade.id WHERE User_id =$id AND shade.id = $col");
 $stmt->execute();
 $stmt->bind_result($testId,$testUserId, $shade, $shadeId);
 $counter = 0;
   while ($row = $stmt->fetch()) {
   $shadybuissness = $shade;
   $counter++;
   // echo $shadybuissness;
   }
   $stmt = $mysqli->prepare("SELECT test.id, test.User_id, shade.name, shade.id FROM test JOIN test_has_shade ON test.id = test_has_shade.test_id JOIN shade ON test_has_shade.shade_id = shade.id where shade.id =$col AND User_id != 210");
   $stmt->execute();
   $stmt->bind_result($allTestId,$allTestUserId, $allShade, $AllShadeId);
   $counterAll= 0;
   while ($row = $stmt->fetch()) {
     $counterAll++;
   }
   $whatperc = ($counter/$counterAll)*100;
   $setSubstr=substr($whatperc,0, 4);
   $finalPerc = $setSubstr."%";
   echo $finalPerc;

// $stmt->close();
}
function getStatsTexture($id, $col) {
 // Connecting to Database
 $db = $GLOBALS['gdb'];
 $mysqli = $db->getConnection();
 $stmt = $mysqli->prepare("SELECT test.id, test.User_id, texture.id FROM test JOIN test_has_texture ON test.id = test_has_texture.test_id JOIN texture ON test_has_texture.texture_id = texture.id WHERE User_id =$id AND texture.id = $col");
 $stmt->execute();
 $stmt->bind_result($testId, $testUserId, $textureId);
 $counter = 0;
   while ($row = $stmt->fetch()) {
   $counter++;
   // echo $shadybuissness;
   }
   $stmt = $mysqli->prepare("SELECT test.id, test.User_id, texture.id FROM test JOIN test_has_texture ON test.id = test_has_texture.test_id JOIN texture ON test_has_texture.texture_id = texture.id where texture.id =$col AND User_id != 210");
   $stmt->execute();
   $stmt->bind_result($allTestId, $allTestUserId,  $AllTextureId);
   $counterAll= 0;
   while ($row = $stmt->fetch()) {
     $counterAll++;
   }
   $whatperc = ($counter/$counterAll)*100;
   $setSubstr=substr($whatperc,0, 4);
   $finalPerc = $setSubstr."%";
   echo $finalPerc;

$stmt->close();
}

}
 ?>
