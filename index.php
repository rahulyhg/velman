﻿<?php 
error_reporting(0);
	?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Velman | Admin</title>
    <!-- Favicon -->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet"/>

    <!-- Bootstrap Core Css -->
    <link href="assets/plugins/bootstrap/dist/css/bootstrap.css" rel="stylesheet"/>

    <!-- Font Awesome Css -->
    <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>

    <!-- iCheck Css -->
    <link href="assets/plugins/iCheck/skins/square/_all.css" rel="stylesheet"/>

    <!-- Custom Css -->
    <link href="assets/css/style.css" rel="stylesheet"/>
</head>
<body class="sign-in-page">
    <div class="signin-form-area">
        <h1><b>Velman</b> - Wood Carving</h1>
        <div class="signin-top-info">Sign in to start your session</div>
        <div class="row padding-15">
            <div class="col-sm-2 col-md-2 col-lg-4"></div>
            <div class="col-sm-8 col-md-8 col-lg-4">
                <form id="frmSignin"  action='login_check.php' method="POST">
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" placeholder="Enter Username" name="email" id="Email" required/>
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" class="form-control" placeholder="Password" name="paswd" id="Password" required/>
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
					<center style="color:red;"><?php 
							if($_REQUEST['log_error']== 'no_result'){
								echo 'Please Enter valid username and Password';
							}
						?></center>
						<br>
                   
					<div class="row">
						<div class="col-xs-4 col-md-offset-4">
                            <center><button type="submit" class="btn btn-success btn-block btn-flat">Sign In</button></center>
							</div> 
						</div>
                   
                </form>
               <!-- <div class="social-media-area">
                    <span>OR</span>
                    <ul>
                        <li>
                            <a href="javascript:void(0);" class="facebook" data-toggle="tooltip" data-title="Facebook">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="twitter" data-toggle="tooltip" data-title="Twitter">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="google-plus" data-toggle="tooltip"
                               data-title="Google Plus">
                                <i class="fa fa-google-plus"></i>
                            </a>
                        </li>
                    </ul>
                </div>-->
            </div>
            <div class="col-sm-2 col-md-2 col-lg-4"></div>
        </div>
    </div>
    <div class="signin-right-image">
        <div class="background-layer"></div>
        <div class="copyright-info">
            <p><b>&copy; <?php echo date('Y'); ?> Velman - Admin</b>. All rights reserved.</p>
        </div>
    </div>
    <div class="signin-bottom-info">
       <!-- <a href="sign-up.html">
            <i class="fa fa-user-circle-o m-r-5"></i>Register Now!
        </a>-->
        <a href="forgot-password.html" class="pull-right">Forgot Password
            <i class="fa fa-unlock m-l-5 font-14"></i>
        </a>
    </div>

    <!-- Jquery Core Js -->
    <script src="assets/plugins/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="assets/plugins/bootstrap/dist/js/bootstrap.js"></script>

    <!-- iCheck Js -->
    <script src="assets/plugins/iCheck/icheck.js"></script>

    <!-- Jquery Validation Js -->
    <script src="assets/plugins/jquery-validation/dist/jquery.validate.js"></script>

    <!-- Custom Js -->
    <script src="assets/js/pages/examples/signin.js"></script>
</body>

</html>
