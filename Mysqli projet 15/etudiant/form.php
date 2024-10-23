
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
    
<?php include '../inc/nav.php'  ?>
<?php if($_SESSION['typeU']=='Etudiant') header('location:/Mysqli/index.php'); ?>

<div class="container">
<form action="" method="post" enctype="multipart/form-data"> <br><br>
<div class="form-group">
    Nom : <br>
    <input type="text" name="nom" id="" class="form-control" > 
</div>
<div class="form-group">
Prénom : <br>
    <input type="text" name="prenom" id="" class="form-control" > 
</div>
<div class="form-group">
Filière : <br>
    <input type="text" name="fili" id="" class="form-control" > 
</div>
<div class="form-group">
Email : <br>
    <input type="email" name="email" id="" class="form-control" > 
</div>
<div class="form-group">
file : <br>
    <input type="file" name="imageE" id="" class="form-control" > 
</div>
<button type="submit" class="btn btn-default" name="save">Enregistrer</button>
</form>
</div>
</body>
</html>


<?php
if(isset($_POST['save'])){
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $fil=$_POST['fili'];
    $email=$_POST['email'];

    //upload image
    $target_dir = "../images/";
    $target_file = $target_dir . basename($_FILES["imageE"]["name"]);
    move_uploaded_file($_FILES["imageE"]["tmp_name"], $target_file);
    if($target_file=="../images/") $target_file="../images/img.png";
    
require '../config.php';
$sql = "INSERT INTO `etudiant` (`id`, `nom`, `prenom`, `filiere`, `email`, `image`) 
VALUES (NULL, '$nom', '$prenom', '$fil', '$email', '$target_file');";
mysqli_query($cn,$sql) or die(mysqli_error($cn));
mysqli_close($cn);
echo 'Etudiant est bien enregistrer';
}

