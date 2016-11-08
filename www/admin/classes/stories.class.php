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

    $db = $GLOBALS['gdb'];
    $mysqli = $db->getConnection();

     $post_query = mysqli_query($mysqli,"SELECT post.id, comments.content, comments.author, time, comments.post_id, comments.User_id, comments.User_roles_id, comments.User_gender_id, comments.User_apps_countries_id from comments left join post on comments.post_id = post.id WHERE post.id = ".$post_id);

        $postInfo = array();
        while($row = mysqli_fetch_assoc($post_query)) {
          $postInfo[] = $row;

        }

        return $postInfo;
  }


  public function deleteComments($commentsid) {
    // Connecting to Database
    $db = $GLOBALS['gdb'];
    $mysqli = $db->getConnection();

    // prepare and bind
    // $stmt = $mysqli->prepare("DELETE FROM comments WHERE postid=?");
    // $stmt->bind_param("i", $commentsid);
    // $stmt->execute();

    $stmt = $mysqli->prepare("DELETE FROM post WHERE id=?");
    $stmt->bind_param("i", $commentsid);
    $stmt->execute();

    error_log($deleteComments);



    $stmt->close();
    //$mysqli->close();
    //header('Location: ./users.php?updated=true');
   }


}
?>
