<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Welcome to Your Home</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/welcome.css'?>">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">*/
  </head>
  <body>
  <?php $name = get_cookie('username'); ?>
    <h1>Welcome <?php echo $name;?> </h1>
    <p>
    <?php
    $msg = $this->session->flashdata('msg');
    if($msg != '')
    {
          echo $msg;
    }
    
    ?></p>
   <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">S.No.</th>
      <th scope="col">Name</th>
      <th scope="col">phone</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th scope="col">Pincode</th>
      <th scope="col">City</th>
      <th scope="col">State</th>
      <th scope="col">gender</th>
      <th scope="col">Status</th>

    </tr>
  </thead>
  <tbody>
    $this->db->get('user');
 
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>

  </body>

</html>
