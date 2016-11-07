<?php
class Post {

 public function __construct() {

 }
 public function createPost($title, $content, $author, $date_post, $User_id, $User_roles_id, $User_gender_id, $User_apps_countries_id) {
 // Connecting to Database
 $db = $GLOBALS['gdb'];
 $mysqli = $db->getConnection();

 // prepare and bind
 $stmt = $mysqli->prepare("INSERT INTO post(title, content, author, date, User_id, User_roles_id, User_gender_id, User_apps_countries_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
 $stmt->bind_param("ssssiiii", $title, $content, $author, $date_post, $User_id, $User_roles_id, $User_gender_id, $User_apps_countries_id);

 $stmt->execute();
 $stmt->close();
 $mysqli->close();

 // header('Location: ../dashboard.php');
}

  function showAllPost($id) {
   // Connecting to Database
   $db = $GLOBALS['gdb'];
   $mysqli = $db->getConnection();

  	// prepare and bind
  	$stmt = $mysqli->prepare("SELECT id, title, content, author, date FROM post WHERE User_id= $id");
    $stmt->bind_result($postid, $title, $content, $author, $date_post);
    $stmt->execute();

    while(mysqli_stmt_fetch($stmt)) {

      echo '<div class="allStories">';
      echo '<a class="btn btn-danger btn-sm confirmation" href="posts.php?delete=true&postid='.$postid.'"><i class="fa fa-trash" aria-hidden="true"></i></a><div class="title"><h1>' .$title. '</h1><h6>'.$date_post. '</h6></div><div id="content"><p>' .$content. '</p></div> <h3>' .$author. '</h3>';
      echo '</div>';

    }
    // var_dump($title);

   $stmt->close();
   $mysqli->close();

 }

 public function deletePost($id) {
   // Connecting to Database
   $db = $GLOBALS['gdb'];
   $mysqli = $db->getConnection();

   // prepare and bind
   $stmt = $mysqli->prepare("DELETE FROM post WHERE id=? LIMIT 1");
   $stmt->bind_param("i", $id);
   $stmt->execute();

   $stmt->close();
  //  $mysqli->close();
   //header('Location: ./users.php?updated=true');
 }

}
?>
