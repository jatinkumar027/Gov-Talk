<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/register.css'?>">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<h1>Register your account </h1>
	<div class="Register">
		<i class="fa fa-user-circle-o fa-4x"></i>
		<form method="post" id="register">
			<input type="text" name="name" placeholder="Enter your Full Name">
			<p><?php echo form_error('name'); ?></p>
			<input type="Number" name="phone" id="Number" placeholder="Enter Phone Number">
			<p><?php echo form_error('phone'); ?></p>
			<input type="email" name="email" id="name" placeholder="Enter Email">
			<p><?php echo form_error('email'); ?></p>
			<input type="password" name="password" value="" placeholder="Enter password">
			<p><?php echo form_error('password'); ?></p>
			<input type="password" name="repassword" value="" placeholder="Re-enter your password">
			<p><?php echo form_error('repassword'); ?></p>
			<input type="text" name="address" placeholder="Enter Address">
			<p><?php echo form_error('address'); ?></p>
			<input type="Pincode" name="pincode" placeholder="Enter Pincode">
			<p><?php echo form_error('pincode'); ?></p>
			<input type="City" name="city" placeholder="Enter City/Town">
			<p><?php echo form_error('city'); ?></p>
			<input type="State" name="state" placeholder="Enter State">
			<p><?php echo form_error('state'); ?></p>
			<div class="radio-buttons">
			  <input type="radio" name="gender" id="male" value="male" checked><label for="male">Male</label>
			  <input type="radio" name="gender" id="female" value="female"><label for="female">Female</label>
			  <input type="radio" name="gender" id="others" value="others"><label for="others">Others</label>
		    </div>
				<p><?php echo form_error('gender'); ?></p>
			<input type="submit" name="submit" value="Register">

		</form>
	</div>
</body>
</html>
