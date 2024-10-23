<form action="" method="post">
    Nom : <br>
    <input type="text" name="nom" id=""> <br><br>
    Prénom : <br>
    <input type="text" name="prenom" id=""> <br><br>
    Filière : <br>
    <input type="text" name="fili" id=""> <br><br>
    Email : <br>
    <input type="email" name="email" id=""> <br><br>

    <input type="submit" name="save" value="Enregistrer">
</form>

<?php
if (isset($_POST['save'])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $fil = $_POST['fili'];
    $email = $_POST['email'];
    require 'config.php';
    $sql = "INSERT INTO `etudiant` (`nom`, `prenom`, `filiere`, `email`)VALUES ('$nom', '$prenom', '$fil', '$email');";
    mysqli_query($cn, $sql) or die(mysqli_error($cn));
    mysqli_close($cn);
    echo 'Etudiant est bien enregistrer';
    echo '<a href="index.php">';
    echo '<button>Home</button>';
    echo '</a>';

}
