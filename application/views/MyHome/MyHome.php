<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="utf-8">
      <title>Register</title>

</head>
<body>
<h1>Welcome to My Home Page</h1>
<div>
      <?php
      $msg = $this->session->flashdata('msg');
      if($msg != ''){
            echo $msg;
      }
      ?>
      
</div>
<div>
      <form method="post">
            <label for="username">Username</label>
            <input type="text" name="username">
            <label for="password">Password</label>
            <input type="password" name="password">
            <input type="submit" name="signin" value="Sign In">
            <input type="submit" name="signup" value="Sign up">
</form>
</form>
</div>
</body>
</html>
