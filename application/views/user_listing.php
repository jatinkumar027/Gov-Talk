<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Welcome to Your Home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/user_listing.css'?>">
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
    <p class="no_data_msg">
      <?php if(empty($userdata))
      {
        echo "Sorry, No User Data Found";
      } else {
      ?></p>
    <div class="table-responsive">
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
    <?php
    foreach ($userdata as $rows){
    ?>
    <tr>
      <th scope="row"><?php echo $rows->sno; ?></th>
      <td><?php echo $rows->name; ?></td>
      <td><?php echo $rows->phone; ?></td>
      <td><?php echo $rows->email; ?></td>
      <td><?php echo $rows->address; ?></td>
      <td><?php echo $rows->pincode; ?></td>
      <td><?php echo $rows->city; ?></td>
      <td><?php echo $rows->state; ?></td>
      <td><?php echo $rows->gender; ?></td>
      <td>
        <?php
        echo ($rows->status=='1') ? "Active": "Inactive";
    }
  }    ?>
      </td>
    </tr>
  </tbody>
</table>
</div>
  </body>

</html>
