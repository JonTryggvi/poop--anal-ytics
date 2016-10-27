<?php
    include('includes/config.php');
	loginCheck();
    include('includes/header.php');


 ?>

  <nav  class="navbar navbar-full navbar-light bg-faded">
    <h1>My header asd</h1>
    <?php createNavigation('mainNav'); ?>

    <div class="row">
      <?php
      echo $_SESSION['UsrNm'];
        var_dump($_SESSION['username']);
      ?>
      <?php createNavigation('userNav'); ?>
    </div>
    <div class="mainUser">

    </div>
  </nav>
