<?php
  //define constant 
  define('__CONFIG__', true);

  require_once('inc/config.php');
  include_once('inc/header.php');

  $user_id = $_SESSION['user_id'];

  $user = new user($_SESSION['user_id']);

  page::forceLogin();
?>
<div class="container-fluid">
  <nav class="navbar navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="assets/img/img1.png" alt="" width="30" height="30"> Angular
      </a>
      <a class="navbar-brand" href="logout.php">Log out</a>
    </div>
  </nav>
  <div class="row mt-4">
    <div class="col-md-12 text-center">
      <h2>Welcome <?php echo $user->email; ?></h2>
      <p> you register at
        <?php
          $date = date_create($user->reg_date);
          echo date_format($date, "d/m/Y h:i");
        ?>
      </p>
    </div>
  </div>
</div>