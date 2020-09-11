<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Thankyou</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/thankyou.css'?>">
  </head>
  <body>
    <h1>Thank you for your Registration</h1>
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
