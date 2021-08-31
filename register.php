<?php
//define constant 
define('__CONFIG__', true);

require_once('inc/config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <?php include_once('inc/header.php');?>
   <style>
       .js-error{
           padding:2px;
           margin-bottom: 5px;
       }
   </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="Absolute-Center is-Responsive">
                <div id="logo-container"></div>
                <div class="col-sm-12 col-md-10 col-md-offset-1">
                    <h2 class="text-center m-4">Sign Up</h2>
                    <form class="js-register">
                        <div class="js-error"></div>
                        <div class="form-group ">
                            <!-- <span class="-addon"><i class="glyphicon glyphicon-user"></i></span> -->
                            <input class="form-control" type="email" name='email' placeholder="Email" required='required' />
                        </div>
                        <div class="form-group  mt-2">
                            <!-- <span class="-addon"><i class="glyphicon glyphicon-lock"></i></span> -->
                            <input class="form-control" type="password" name='password' placeholder="Password" required='required' />
                        </div>
                        <div class="form-group mt-4 ">
                            <button type="submit" class="btn btn-primary btn-sm" style="float:right;">Register</button>
                        </div>
                        <div class="form-group text-center">
                            <a href="#">Forgot Password</a>&nbsp;|&nbsp;<a href="login.php">Sign In</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
<?php include_once('inc/footer.php');?>
</html>