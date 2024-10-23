
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="POST">
<input type="submit" value="logout" name="logout"><br>
</form>   
</body>
</html>

<?php 
echo "page2";

if(isset($_POST['logout'])){
    session_start();
    session_unset();
    session_destroy();
}
?>
