<?php
class Stories {

 public function __construct() {

 }

 public function getAllStories(){

   // Connecting to Database
   $db = $GLOBALS['gdb'];
   $mysqli = $db->getConnection();

    // prepare and bind
    $stmt = $mysqli->prepare("SELECT id, title, content, author, date FROM post ORDER BY id DESC");
    $stmt->bind_result($id, $title, $content, $author, $date_post);
    $stmt->execute();

    // $content2 = substr($content, 0, 100);

    while(mysqli_stmt_fetch($stmt)) {

      echo '<div class="allStories">';
      echo '<div class="title"><h1>' .$title. '</h1><h6>'.$date_post. '</h6></div><div id="content"><p>' .$content. '</p><a>Read more</a></div><h3>' .$author. '</h3>';
      echo '<form action="stories.php" method="POST" role="tabpanel" >
          <textarea name="content" type="text"></textarea>
          <div class="form-group">
            <input type="submit" name="commentSubmit" class="btn btn-primary btn-lg btn-block">
          </div>
        </form>';
      echo '</div>';

    }

  //  $stmt->close();
  //  $mysqli->close();
 }

 public function setComments($content, $author, $comment_time, $post_id, $User_id, $User_roles_id, $User_gender_id, $User_apps_countries_id){

   $db = $GLOBALS['gdb'];
   $mysqli = $db->getConnection();


    $stmt = $mysqli->prepare("INSERT INTO comments(content, author, time, post_id, User_id, User_roles_id, User_gender_id, User_apps_countries_id)VALUES(?, ?, ?, ?, ?, ?, ?, ?) SELECT post_id FROM comments LEFT JOIN  ON comments.post_id=post.id");
    $stmt->bind_param("sssiiiii", $content, $author, $comment_time, $post_id, $User_id, $User_roles_id, $User_gender_id, $User_apps_countries_id);

    $stmt->execute();

    $stmt->close();

 }

 function getComments(){
   // Connecting to Database
   $db = $GLOBALS['gdb'];
   $mysqli = $db->getConnection();

   $stmt = $mysqli->prepare("SELECT content, author, time FROM comments");
   $stmt->bind_result($content, $author, $comment_time);
   $stmt->execute();

   while(mysqli_stmt_fetch($stmt)) {

     echo '<div id="comment">';
     echo '<div class="title"><h1>' .$author. '</h1><h6>'.$comment_time. '</h6><a>Read more</a></a></div><div id=""><p>' .$content. '</p></div><h3>' .$author. '</h3>';
     echo '</div>';

   }

 }


}
?>
