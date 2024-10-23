
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
<div class="container">
<form action="" method="post"> <br><br>
<div class="form-group">
    Nom : <br>
    <input type="text" name="nom" id="" class="form-control" > 
</div>
<div class="form-group">
Coeff : <br>
    <input type="number" name="coeff" id="" class="form-control" > 
</div>
<button type="submit" class="btn btn-default" name="save">Enregistrer</button>
</form>
</div>
</body>
</html>


<?php
if(isset($_POST['save'])){
    $nom=$_POST['nom'];
    $coeff=$_POST['coeff'];
require '../config.php';
$sql = "INSERT INTO `modules` (`id`, `nom`, `coeff`) 
VALUES (NULL, '$nom', '$coeff');";
mysqli_query($cn,$sql) or die(mysqli_error($cn));
mysqli_close($cn);
echo 'modules est bien enregistrer';
}

