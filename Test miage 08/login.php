
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
<?PHP 
include('src/menu.php')
?>
<form action="" method="post">
  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
    <button type="submit" name="login">Login</button>
  </div>
</form>
</body>
</html>

<?php
session_start();
if (isset($_POST['login'])){
  $usern=$_POST['uname'];
  $psw2=$_POST['psw'];

  if(($usern=="user" && $psw2=="112233") || ($usern=="admin" && $psw2=="admin123")){
    $_SESSION['typeU']=$usern;
    setcookie("lastv",date("d/m/y h:i"));
    header('location:secrete1.php');
  }else{
    echo 'username or password invalide';
  }
}
?>
