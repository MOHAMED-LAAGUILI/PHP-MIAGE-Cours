<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <?php
  require 'src/menu.php';
  if (!isset($_SESSION['typeU'])) {
    header('location:login.php');
  }
  ?>

  <h2>secrete 2</h2>
  <?php
  if ($_SESSION['typeU'] == 'admin') {
    echo "bonjour " . $_SESSION['typeU'] . ' date visite : ' . $_COOKIE['lastv'];
  } else {
    header('location:secrete1.php');
  }

  ?>
</body>

</html>