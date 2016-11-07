<?php
class Stories {

 public function __construct() {

 }

 public function getAllStories($id){

   // Connecting to Database
   $db = $GLOBALS['gdb'];
   $mysqli = $db->getConnection();

    // prepare and bind
    $post_query = mysqli_query($mysqli, "SELECT id, title, content, author, date FROM post ORDER BY id DESC");

    $postInfo = array();
     while($row = mysqli_fetch_assoc($post_query)) {
       $postInfo[] = $row;
     }
     return $postInfo;


    // $content2 = substr($content, 0, 100);

    // while(mysqli_stmt_fetch($stmt)) {
    //
    //   echo '<div class="allStories">';
    //   echo '<div class="title"><h1>' .$title. '</h1><h6>'.$date_post. '</h6></div><div id="content"><p>' .$content. '</p><a>Read more</a></div><h3>' .$author. '</h3>';
    //   echo '<form action="stories.php" method="POST" role="tabpanel">
    //           <textarea name="content" type="text"></textarea>
    //           <div class="form-group">
    //             <input type="submit" name="commentSubmit" class="btn btn-primary btn-lg btn-block">
    //           </div>
    //         </form>';
    //   echo '</div>';
    //
    // }

  //  $stmt->close();
  //  $mysqli->close();
 }

 public function setComments($content, $author, $comment_time, $post_id, $User_id, $User_roles_id, $User_gender_id, $User_apps_countries_id){

   $db = $GLOBALS['gdb'];
   $mysqli = $db->getConnection();


    $stmt = $mysqli->prepare("INSERT INTO comments(content, author, time, post_id, User_id, User_roles_id, User_gender_id, User_apps_countries_id)VALUES(?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssiiiii", $content, $author, $comment_time, $post_id, $User_id, $User_roles_id, $User_gender_id, $User_apps_countries_id);

    $stmt->execute();

    $stmt->close();

 }

  function getPostComments($post_id){
     $post_query = mysqli_query($mysqli,"SELECT id, content, author, time, post_id, User_id, User_roles_id, User_gender_id, User_apps_countries_id from comments left join post on comments.post_id = post.id = $user_id");
        $postInfo = array();
        while($row = mysqli_fetch_assoc($post_query)) {
          $postInfo[] = $row;
        }
        return $postInfo;
  }


}
?>
