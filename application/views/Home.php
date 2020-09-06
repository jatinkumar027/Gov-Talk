<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/home.css'?>">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<title>Login</title>
</head>
<body>
	<h1>Login your Account</h1>
	<span class="top-error-msg">
	<?php
	$error = $this->session->flashdata('error');
	if($error != '')
	{
				echo $error;
	}
	?></span>
	<div class="container">
	<img src="<?php echo base_url().'assets/img/home-user-icon.png'?>" alt="image1">
	<form method="post">
		<div class="form-input">
			<i class="fa fa-envelope fa-2x cust" aria-hidden="true"></i>
			<input type="email" name="email" placeholder="Enter Email">
			<div class="arrow-up">
			</div>
			<?php echo form_error('email'); ?>
			<input type="password" name="password" placeholder="Enter password">
			<i class="fa fa-lock fa-3x cust2" aria-hidden="true"></i></input>
			<div class="arrow-up">
			</div>
			<?php echo form_error('password'); ?>
			<a href ="#">Forgot password?</a>
			<input type="submit" name="submit" value="Log in">
			<div class="inline-register">
				<a href ="<?php echo base_url().'index.php/Register/regform'; ?>">Register</a>
				<label>Don't have an account?</label>
		    </div>
		</div>

	</form>
</div>

</body>
</html>
