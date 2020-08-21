<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Welcome to Your Home</title>
  </head>
  <body>
    <h1>Welcome <?php echo "Ms. Pragya";?></h1>
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
