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
<?php
    require '../config.php'; ?>
    <?php if($_SESSION['typeU']=='Etudiant') header('location:/Mysqli/index.php'); 

    $id=$_GET['id']; 
    $sql = "SELECT * FROM `etudiant` WHERE id=$id;";
    $result=mysqli_query($cn,$sql) or die(mysqli_error($cn));
    if($row=mysqli_fetch_array($result)){  ?>
<div class="container">
<form action="" method="post" enctype="multipart/form-data"> <br><br>
<div class="form-group">
    Nom : <br>
    <input type="text" name="nom" value="<?php echo $row[1] ?>" class="form-control" > 
</div>
<div class="form-group">
Prénom : <br>
    <input type="text" name="prenom" value="<?php echo $row[2] ?>" class="form-control" > 
</div>
<div class="form-group">
Filière : <br>
    <input type="text" name="fili" value="<?php echo $row[3] ?>" class="form-control" > 
</div>
<div class="form-group">
Email : <br>
    <input type="email" name="email" value="<?php echo $row[4] ?>" class="form-control" > 
</div>
<div class="form-group">
file : <br> 
<img src="<?php echo $row[5]?>" alt="" style=" width: 50px;">
<br> 
    <input type="file" name="imageE" id="" class="form-control" > 
</div>
<button type="submit" class="btn btn-default" name="edit">Modifier</button>
</form>
</div>
<?php
   $imgM= $row[5];
}
    mysqli_close($cn);
    ?>
</body>
</html>




<?php
if(isset($_POST['edit'])){
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $fil=$_POST['fili'];
  $email=$_POST['email'];

    if(basename($_FILES["imageE"]["name"])){
        $target_dir = "../images/";
        $target_file = $target_dir . basename($_FILES["imageE"]["name"]);
        move_uploaded_file($_FILES["imageE"]["tmp_name"], $target_file);
        $imgM=$target_file;
    }

require '../config.php';
$sql = "UPDATE `etudiant` SET `nom` = '$nom', `prenom` = '$prenom', `filiere` = '$fil', `email` = '$email' , `image` = '$imgM' WHERE `etudiant`.`id` = $id;";
mysqli_query($cn,$sql) or die(mysqli_error($cn));
mysqli_close($cn);
header('location:index.php');
}
