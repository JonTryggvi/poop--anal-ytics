<?php
class Stories {

 public function __construct() {

 }

 public function getAllStories(){

   // Connecting to Database
   $db = $GLOBALS['gdb'];
   $mysqli = $db->getConnection();

    // prepare and bind
    $stmt = $mysqli->prepare("SELECT id, title, content, author FROM post ORDER BY id DESC  LIMIT 3 ");
    $stmt->bind_result($id, $title, $content, $author);
    $stmt->execute();

    // $content2 = substr($content, 0, 100);

    while(mysqli_stmt_fetch($stmt)) {

      echo '<div class="allStories">';
      echo '<div class="title"><h1>' .$title. '</h1><h6>'.$date_post. '</h6></div><div id="content"><p>' .substr($content, 0, 100). '</p></div><a href="././admin/login.php">Read more</a><h3>' .$author. '</h3>';
      echo '</div>';

    }

   $stmt->close();
   $mysqli->close();
 }


}
?>
