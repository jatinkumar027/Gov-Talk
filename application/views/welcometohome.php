<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Welcome to Your Home</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/welcome.css'?>">
  </head>
  <body>
  <?php $name = $this->session->userdata('username'); ?>
    <h1>Welcome <?php echo $name;?> </h1>
    <p>
    <?php
    $msg = $this->session->flashdata('msg');
    if($msg != '')
    {
          echo $msg;
    }
    ?></p>
    
  </body>
</html>
