<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./homepage_style.css">
  <title>Home Page View</title>
</head>

<body>
  <h1 class="big-text">Hello Home Page View</h1>

  <!-- get data from controller -->
  <ul class="style_ul">
    <?php foreach ($list_phone as $key): ?>
      <li class="style_ul"><?php echo $key ; ?></li>
      <br/>
    <?php endforeach?>
  </ul>
</body>

</html>