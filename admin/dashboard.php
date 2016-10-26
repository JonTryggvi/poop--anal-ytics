<?php
    include('includes/config.php');
    include('includes/header.php');

 ?>

  <nav  class="navbar navbar-full navbar-light bg-faded">
    <h1>My header</h1>
    <?php createNavigation('mainNav'); ?>

    <div class="row">
      <?php createNavigation('userNav'); ?>
    </div>
  </nav>
