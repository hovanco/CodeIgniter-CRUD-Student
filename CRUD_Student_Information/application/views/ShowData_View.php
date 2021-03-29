<!DOCTYPE html>
<html lang="">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Show Data From DB to View</title>

  <!-- use bootstrap and css -->
  <script type="text/javascript" src="<?php echo base_url(); ?>vendor/bootstrap.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>1.js"></script>
  <link rel="stylesheet" href="<?php echo base_url(); ?>vendor/bootstrap.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>vendor/font-awesome.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>1.css">
</head>

<body>
  <?php require('MenuNavBar_View.php') ; ?>

  <div class="container">
    <h3 class="text-xs-center">List Information Of Student</h3>
    <hr />
  </div>

  <!-- tao data gia de xem hien thi co dep khong -->
  <div class="container">
    <div class="row">
    <?php foreach ($data_from_controller as $key => $value) : ?>
      <div class="col-sm-4">
        <div class="card card-block">
          <h3 class="card-title">Name: <?= $value['name'] ?></h3>
          <p class="card-text">Phone: <?= $value['phone'] ?></p>
          <p class="card-text">Class: <?= $value['class'] ?></p>
          <p class="card-text">ID: <?= $value['id'] ?></p>
          <a href="ShowData_Controller/deleteData/<?=$value['id']?>" class="btn btn-danger xoa"><i class="fa fa-times"></i></a>
          <a href="ShowData_Controller/editData/<?=$value['id']?>" class="btn btn-warning sua"><i class="fa fa-pencil"></i></a>
        </div>
      </div>
      <?php endforeach ?>
    </div>
  </div>
  
 

</body>

</html>