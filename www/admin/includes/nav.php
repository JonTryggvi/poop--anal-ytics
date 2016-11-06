<div class="row">

  <nav class="navbar navbar-light bg-faded">

    <?php createNavigation('userNav'); ?>
    <?php echo $_SESSION['UsrNm']  ?>
  </nav>
  <nav class="mainNavContainer">
    <?php createNavigation('mainNav'); ?>
  </nav>

</div>
<div class="row">
  <div class="col-md-3 p-a-3">

  </div>
  <div class="col-md-9 p-a-3">
    <div class="row">
      <nav class="breadcrumb">
        <a class="breadcrumb-item" href="#">Home</a>
        <span class="breadcrumb-item active" href="#">Dashboard</span>
      </nav>
    </div>
  </div>

</div>
