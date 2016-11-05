<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">

  <title></title>
  <meta name="description" content="CMS">
  <meta name="author" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/css/bootstrap.min.css" integrity="sha384-2hfp1SzUoho7/TsGGGDaFdsuuDL0LX2hnUp6VkX3CUQ2K4K+xjboZdsXyp4oUHZj" crossorigin="anonymous">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" href="./assets/css/styles.css" >

  <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
  <![endif]-->
</head>

<body>

  <div class="header">
    <div class="wrap">
      <div class="bergur"></div>
      <h1 class="logo">GoPoop</h1>
      <!-- Image trigger modal -->
      <img class="user-icon" src="img/icons/user.svg" alt="" data-toggle="modal" data-target="#myModal">

      <!-- Modal -->
      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

              <div class="modal-user">
                <div class="user-image">
                  <img src="img/poops/GoPoop_icon-02.png" alt="" />
                </div>
                <div class="user-name-email">
                  <p class="modal-title" id="myModalLabel">Name of User</p>
                  <p vlass="modal-user-email">email of user</p>
                </div>
              </div>

            </div>
            <div class="modal-body">
              <span class="change-photo"><i class="fa fa-camera" aria-hidden="true" data-dismiss="modal"></i> Change Photo</span>
              <span class="settings"><i class="fa fa-cog" aria-hidden="true"></i> Settings</span>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn modal-button">Log out</button>
            </div>
          </div>
        </div>
      </div><!-- /.modal -->
    </div>
  </div><!-- / .header -->
