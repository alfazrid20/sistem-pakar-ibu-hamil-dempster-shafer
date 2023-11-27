<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login | Sistem Pakar Komplikasi Bumil</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?php echo base_url() ?>assets/templatelogin/images/icons/logo123.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/templatelogin/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/templatelogin/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/templatelogin/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/templatelogin/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/templatelogin/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/templatelogin/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/templatelogin/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/templatelogin/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/templatelogin/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/templatelogin/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	<?php echo form_open('login_admin/login'); ?>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<section class="login100-form validate-form">
					<span class="login100-form-title p-b-34" style="font-family: arial">
						Sistem Pakar Komplikasi Ibu Hamil
						<span style="text-align: center !important; font-size: 12px; text-transform: none;">Silahkan login untuk melanjutkan</span>
					</span>
					
					
					<div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Type user name">
						<input id="first-name" class="input100" type="text" name="username" placeholder="Username" style="font-family: arial">
						<span class="focus-input100" style="border-color: #3EA8FF"></span>
					</div>
					<div class="wrap-input100 rs2-wrap-input100 validate-input m-b-20" data-validate="Type password">
						<input class="input100" type="password" name="password" placeholder="Password" style="font-family: arial">
						<span class="focus-input100" style="border-color: #3EA8FF"></span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="submit" style="background: #3EA8FF; font-family: arial;" >
							Masuk
						</button>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="submit" style="background: #FFFAF0; font-family: arial;" >
							<a href="<?php echo site_url() ?>/welcome">Kembali</a>
						</button>
					</div>

				</section>
				<?php echo form_close(''); ?>


				<div class="login100-more" style="background-image: url('<?php echo base_url() ?>assets/templatelogin/images/bg09.jpg');"></div>
			</div>
		</div>
	</div>
	
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="<?php echo base_url() ?>assets/templatelogin/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url() ?>assets/templatelogin/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url() ?>assets/templatelogin/vendor/bootstrap/js/popper.js"></script>
	<script src="<?php echo base_url() ?>assets/templatelogin/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url() ?>assets/templatelogin/vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="<?php echo base_url() ?>assets/templatelogin/vendor/daterangepicker/moment.min.js"></script>
	<script src="<?php echo base_url() ?>assets/templatelogin/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url() ?>assets/templatelogin/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url() ?>assets/templatelogin/js/main.js"></script>

</body>
</html>