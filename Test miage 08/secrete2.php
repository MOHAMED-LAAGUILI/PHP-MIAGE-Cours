<?php
  session_start();
  if(!isset($_SESSION['typeU'])){
    header('location:login.php');
  }
?>
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
<ul>
  <li><a href="login.php">Login</a></li>
  <li><a href="secrete1.php">Secrete 1</a></li>
  <li><a href="secrete2.php">Secrete 2</a></li>
  <li style="float:right"><a class="" href="logout.php">Logout</a>
</ul>

<h2>secrete 2</h2>
<?php
if ($_SESSION['typeU']=='admin') {
  echo "bonjour ". $_SESSION['typeU'] . ' date visite : ' . $_COOKIE['lastv'];
}else{
  header('location:secrete1.php');
}
  
?>
</body>
</html>