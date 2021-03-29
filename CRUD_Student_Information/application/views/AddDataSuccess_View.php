<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Xoa thanh cong</title>
  <!-- use bootstrap and css -->
  <script type="text/javascript" src="<?php echo base_url(); ?>vendor/bootstrap.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>1.js"></script>
  <link rel="stylesheet" href="<?php echo base_url(); ?>vendor/bootstrap.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>vendor/font-awesome.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>1.css">
</head>

<body>
<?php require('MenuNavBar_View.php') ; ?>
  <h2 class="text-xs-center display-3">Insert data to database success!</h2>
  <a href="<?= base_url(); ?>index.php/AddData_Controller" class="btn btn-info btn-lg">Go to home
    <i class="fa fa-chevron-left"></i></a>
  </div>
</body>

</html>