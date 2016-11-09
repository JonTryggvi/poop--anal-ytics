<div class="header">
  <div class="wrap">
<?php $updateUserIconProfile2  = new User();?>
    <!-- Modal Nav -->
    <div class="bergur">
      <div class="button_container" id="toggle">
        <span class="top"></span>
        <span class="middle"></span>
        <span class="bottom"></span>
      </div>

      <div class="overlay" id="overlay">
        <nav class="overlay-menu">
          <ul class="ul-nav">
            <li class="li-nav"><a class="nav-link" href="index.php">Poop Test</a></li>
            <li class="li-nav"><a class="nav-link" href="#">Shitty Stories</a></li>
            <li class="li-nav"><a class="nav-link" href="advice.php">Good Advice</a></li>
          </ul>
        </nav>
      </div>
    </div> <!-- End modal -->

    <h1 class="logo">GoPoop</h1>
    <!-- Image trigger modal -->
    <!-- <img class="default-user" src="img/trump-orange.jpg" alt="" data-toggle="modal" data-target="#myModal"> -->
    <!-- <img class="default-user" src="../upload.php/php?id=100" alt="" data-toggle="modal" data-target="#myModal"> -->

      <?php $updateUserIconProfile2->updateUserIconProfile();?>

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

            <div class="modal-user">
              <div class="user-image">
                <?php $updateUserIconProfile2->updateUserIconProfile();?>
              </div>
              <div class="user-name-email">
                <p class="modal-title" id="myModalLabel">Name: <?php echo $_SESSION['UsrNm']  ?></p>
                <p vlass="modal-user-email">Email: <?php echo $_SESSION['User_email'] ?> </p>
              </div>
            </div>


          </div>
          <div class="modal-body">
            <!-- <span class="change-photo"><i class="fa fa-camera" aria-hidden="true" data-dismiss="modal"></i>Change Photo</span>
            <span class="settings"><i class="fa fa-cog" aria-hidden="true"></i>Settings</span> -->
            <form action="upload.php" method="post" enctype="multipart/form-data">
                Select image to upload:
                <input type="file" name="fileToUpload" id="fileToUpload">
                <input type="submit" value="Upload Image" name="submitImage">
            </form>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn modal-button">Log out</button>
          </div>
        </div>
      </div>
    </div><!-- /.modal -->
  </div>
</div><!-- / .header -->
