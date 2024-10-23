<form action="" method="post">
    Nom : <br>
    <input type="text" name="nom" id=""> <br><br>
    Prénom : <br>
    <input type="text" name="prenom" id=""> <br><br>
    Filière : <br>
    <input type="text" name="fili" id=""> <br><br>
    Email : <br>
    <input type="email" name="email" id=""> <br><br>
    Image : <br>
    <input type="file" name="imageE" id=""> <br><br>
    <input type="submit" name="save" value="Enregistrer">
</form>

<?php
if(isset($_POST['save'])){
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $fil=$_POST['fili'];
    $email=$_POST['email'];
require '../config.php';
$sql = "INSERT INTO `etudiant` (`id`, `nom`, `prenom`, `filiere`, `email`, `image`) 
VALUES (NULL, '$nom', '$prenom', '$fil', '$email', '../images/img.png');";
mysqli_query($cn,$sql) or die(mysqli_error($cn));
mysqli_close($cn);
echo 'Etudiant est bien enregistrer';
}

