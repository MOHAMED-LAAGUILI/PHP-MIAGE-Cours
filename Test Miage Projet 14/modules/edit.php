<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php
    require '../config.php';
    $id=$_GET['id']; 
    $sql = "SELECT * FROM `modules` WHERE id=$id;";
    $result=mysqli_query($cn,$sql) or die(mysqli_error($cn));
    if($row=mysqli_fetch_array($result)){  ?>
<div class="container">
<form action="" method="post"> <br><br>
<div class="form-group">
    Nom : <br>
    <input type="text" name="nom" value="<?php echo $row[1] ?>" class="form-control" > 
</div>
<div class="form-group">
Coeff : <br>
    <input type="text" name="coeff" value="<?php echo $row[2] ?>" class="form-control" > 
</div>
<button type="submit" class="btn btn-default" name="edit">Modifier</button>
</form>
</div>
<?php
    }
    mysqli_close($cn);
    ?>
</body>
</html>

<?php
if(isset($_POST['edit'])){
    $nom=$_POST['nom'];
    $coeff=$_POST['coeff']; 
require '../config.php';
$sql = "UPDATE `modules` SET `nom` = '$nom', `coeff` = '$coeff' WHERE `modules`.`id` = $id;";
mysqli_query($cn,$sql) or die(mysqli_error($cn));
mysqli_close($cn);
header('location:index.php');
}