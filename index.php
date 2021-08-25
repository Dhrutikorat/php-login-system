<?php
//define constant 
define('__CONFIG__', true);

require_once('inc/config.php');
include_once('inc/header.php');
?>
<div class="container">
    <div class="row">
        <div class="Absolute-Center is-Responsive">
            <div id="logo-container"></div>
            <div class="col-sm-12 col-md-10 col-md-offset-1">
                <h2>
                    <?php
                    echo "Hello World. "; ?>
                </h2>
                <p>
                    <?php
                    echo "Today is : " . date('d m Y');
                    ?></p>
                <a href="login.php">Sign In</a>&nbsp;|&nbsp;<a href="register.php">Sign Up</a>
            </div>
        </div>
    </div>
</div>
<?php include_once('inc/footer.php'); ?>