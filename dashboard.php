<?php
//define constant 
define('__CONFIG__', true);

require_once('inc/config.php');
include_once('inc/header.php');

forceLogin();
// echo $_SESSION['user_id'] . 'is your user id';
?>
<div class="container-fluid">
<nav class="navbar navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="assets/img/img1.png" alt="" width="30" height="30"> Angular
    </a>
    <a href="#">Log out</a>
  </div>
</nav>
</div>