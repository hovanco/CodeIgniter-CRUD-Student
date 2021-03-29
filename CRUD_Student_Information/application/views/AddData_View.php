<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Data View - Information Student</title>
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
    <h3 class="text-xs-center">Add Data</h3>
    <hr />
  </div>

  <div class="container">
    <div class="rowabv">
      <div class="col-sm-8 push-sm-2">

        <!-- Cau truc URL dung: ten_mien/ten_project/index.php/ten_controller/ham_trong_controller -->
        <!-- Dung http://localhost:8080/CRUD_Student_Information/index.php/AddData_Controller/insertData_controller
      Sai: http://localhost:8080/CRUD_Student_Information/index.php/insertData_controller -->
        <form action="AddData_Controller/insertData_controller" method="post" enctype="multidata/form-data">
          <div class="card">
            <div class="card-block" style="background-color: #783937FF;">
              <fieldset class="form-group">
                <label for="formGroupExampleInput" style="color: #fff;">Name</label>
                <input type="text" name="name" class="form-control" placeholder="VD: Benzema">
              </fieldset>
              <fieldset class="form-group">
                <label for="formGroupExampleInput" style="color: #fff;">Phone</label>
                <input type="number" name="phone" class="form-control" placeholder="0356566565">
              </fieldset>
              <fieldset class="form-group">
                <label for="formGroupExampleInput" style="color: #fff;">Class</label>
                <input type="text" name="class" class="form-control" placeholder="12A1">
              </fieldset>
              <button style="background-color: #5cdb5c;" type="submit" class="btn btn-success btn-block">Add To
                MySQL</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>

</html>