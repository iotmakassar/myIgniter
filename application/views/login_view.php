<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="Codeigniter, bootstrap, Grocerycrud">
    <meta name="author" content="Asrul Hanafi">
	<!--Bootstrap-->
    <title>myIgniter Login</title>
    <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/login.css') ?>" rel="stylesheet">
    <!--Font-->
	<link href="<?php echo base_url('assets/css/font-awesome.min.css') ?>" rel="stylesheet">
    <!--[if lt IE 9]>
    <![endif]-->
</head>
<body>

<!--- Login -->
<div class="row">
	<div class="col-md-12 text-center">
		<div class="container">
			<div class="login-container">
				<div id="output"></div>
				<div class="avatar"><i class="fa fa-user fa-5x"></i>ADMIN</div>
				<div class="form-box">

					<?php echo form_open('verifylogin'); ?>
					  <input type="text" size="20" id="username" placeholder="username" required=""  name="username"/>
					  <input type="password" size="20" id="passowrd" placeholder="password" required="" name="password"/>
					  <button class="btn btn-info btn-block login" type="submit"><i class="fa fa-sign-in"></i> Login</button>
					<?php echo form_close(); ?>

				</div>
				<br/>
					<?php 
					if(validation_errors()){
					?>
					<div class="alert alert-danger alert-dismissible" role="alert">
					  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span>
					  <span class="sr-only">Close</span></button>
					<?php echo validation_errors(); ?>
					</div>
					<?php } ?>
			</div>						
		</div>
	</div>
</div>
<!-- Beginning footer -->
<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<p class="footer">
					<span class="pull-right">Page rendered in <strong>{elapsed_time}</strong> seconds</span>
					Made by <a href="http://www.facebook.com/hanafi.asrul" target="_blank">Asrul Hanafi</a>. 
					Contact at <a href="mailto:hanafi.asrul@gmail.com">hanafi.asrul@gmail.com</a>.
				</p>
			</div>
		</div>
	</div>
</footer>
<!-- End of Footer -->
<script src="<?php echo base_url('assets/js/jquery-1.11.1.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.js') ?>"></script>
</body>
</html>