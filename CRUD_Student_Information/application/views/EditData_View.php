<!DOCTYPE html>
<html lang="">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Show Data From DB to View</title>

  <style>

  .wrapper {
    background-color: pink;
    height: 650px;
  }

  

  </style>

  <!-- use bootstrap and css -->
  <script type="text/javascript" src="<?php echo base_url(); ?>vendor/bootstrap.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>1.js"></script>
  <link rel="stylesheet" href="<?php echo base_url(); ?>vendor/bootstrap.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>vendor/font-awesome.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>1.css">
</head>

<body>
  <!-- component header -> this is menu navbar -->
  <?php require('MenuNavBar_View.php') ; ?>

  <div class="wrapper">
  

  <div class="container">
    <h3 class="text-xs-center">Edit Data</h3>
    <hr />
  </div>

  <div class="container">
    <div class="row">
      <?php foreach ($array_data_edit as $key => $value): ?>
      <div class="container">
        <div class="rowabv">
          <div class="col-sm-8 push-sm-2">
            <form action="../updateData" method="post" enctype="multidata/form-data">
              <div class="card">
                <div class="card-block" style="background-color: #783937FF;">
                  <fieldset class="form-group">
                    <!-- <label for="formGroupExampleInput" style="color: #fff;">ID</label> -->
                    <input type="hidden" name="id" class="form-control" placeholder="VD: 1" value="<?= $value['id'] ?>">
                  </fieldset>
                  <fieldset class="form-group">
                    <label for="formGroupExampleInput" style="color: #fff;">Name</label>
                    <input type="text" name="name" class="form-control" placeholder="VD: Kaka" value="<?= $value['name'] ?>">
                  </fieldset>
                  <fieldset class="form-group">
                    <label for="formGroupExampleInput" style="color: #fff;">Phone</label>
                    <input type="text" name="phone" class="form-control" placeholder="035555555" value="<?= $value['phone'] ?>">
                  </fieldset>
                  <fieldset class="form-group">
                    <label for="formGroupExampleInput" style="color: #fff;">Class</label>
                    <input type="text" name="class" class="form-control" placeholder="12A" value="<?= $value['class'] ?>">
                  </fieldset>
                  <button style="background-color: #5cdb5c;" type="submit" class="btn btn-success btn-block">Save</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <?php endforeach?>
    </div>
  </div>
  </div>
</body>

</html>