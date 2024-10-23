<?php
    require '../config.php';
    $id=$_GET['id']; 
    $sql = "SELECT * FROM `etudiant` WHERE id=$id;";
    $result=mysqli_query($cn,$sql) or die(mysqli_error($cn));
    if($row=mysqli_fetch_array($result)){  ?>
<form action="" method="post">
    Nom : <br>
    <input type="text" name="nom" value="<?php echo $row[1] ?>"> <br><br>
    Prénom : <br>
    <input type="text" name="prenom" value="<?php echo $row[2] ?>"> <br><br>
    Filière : <br>
    <input type="text" name="fili" value="<?php echo $row[3] ?>"> <br><br>
    Email : <br>
    <input type="email" name="email" value="<?php echo $row[4] ?>"> <br><br>
    Image : <br>
    <input type="file" name="imageE" value=""> <br><br>
    <input type="submit" name="edit" value="Modifier">
</form>
<?php
    }
    mysqli_close($cn);
    ?>
<?php
if(isset($_POST['edit'])){
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $fil=$_POST['fili'];
    $email=$_POST['email'];
require '../config.php';
$sql = "UPDATE `etudiant` SET `nom` = '$nom', `prenom` = '$prenom', `filiere` = '$fil', `email` = '$email' WHERE `etudiant`.`id` = $id;";
mysqli_query($cn,$sql) or die(mysqli_error($cn));
mysqli_close($cn);
header('location:index.php');
}
