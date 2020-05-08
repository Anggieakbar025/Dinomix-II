<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sign Up</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/login/images/icons/q.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/login/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/login/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/login/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/login/css/main.css">
	<link href="https://fonts.googleapis.com/css?family=Bebas+Neue&display=swap" rel="stylesheet">
<!--===============================================================================================-->
</head>
<body>
	
<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="<?= base_url(); ?>Signup/registerUser" method="POST">
                    <span class="login100-form-title p-b-26"></span>
                    <div class="text-center p-t-0 p-b-5" > 
						<h1 style="color:#B97C5E;font-size:55px; font-family: 'Bebas Neue', cursive;">Sign Up</b> </h1>
					</div>
					<?php if ($this->session->flashdata('success')) {?>
                            <div class="alert alert-success alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <?php echo $this->session->flashdata('success'); ?>
                            </div>
                          <?php  } ?> 

                        <!-- validation messages for taking inputs -->
                        <?php echo validation_errors('<div class="alert alert-danger alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>','</div>');
                        ?> 
                    <div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="nama">
						<span class="focus-input100" data-placeholder="Nama"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
						<input class="input100" type="email" name="email">
						<span class="focus-input100" data-placeholder="Email"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "">
						<input class="input100" type="text" name="alamat">
						<span class="focus-input100" data-placeholder="Alamat"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "">
						<input class="input100" type="text" name="telepon">
						<span class="focus-input100" data-placeholder="No.HP"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "">
						<input class="input100" type="text" name="username">
						<span class="focus-input100" data-placeholder="Username"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="password" id="password">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<input class="login100-form-btn" value="Sign Up" style="background-color:#B97C5E;" type="submit"> 
						</div>
					</div>

					<div class="text-center p-t-5">
						<span class="txt1">
							Back
						</span>

						<a class="txt2" href="<?php echo site_url('Login') ?>">
							Login
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>assets/login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>assets/login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>assets/login/vendor/bootstrap/js/popper.js"></script>
	<script src="<?php echo base_url(); ?>assets/login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>assets/login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>assets/login/vendor/daterangepicker/moment.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>assets/login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>assets/login/js/main.js"></script>

</body>
</html>