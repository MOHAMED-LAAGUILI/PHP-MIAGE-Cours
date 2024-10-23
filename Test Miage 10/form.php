<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="" method="post">
    Nom : <br>
    <input type="text" name="nom"> <br>
    Prenom : <br>
    <input type="text" name="prn"> <br>
    Filiere : <br>
    <input type="text" name="filier"> <br>
    Telephone : <br>
    <input type="text" name="tel"> <br>
    <br>
    <br>
    <input type="submit" value="submit" name="submit">
    <input type="reset" value="reset">

</form>

</body>
</html>

<?php
if (isset($_POST['submit'])) {
    
    require("connection.php");

    $nom = $_POST['nom'];
    $prn = $_POST['prn'];
    $filier = $_POST['filier'];
    $tel = $_POST['nom'];

    $sql = "INSERT INTO `etudiant`(`id`, `nom`, `prenom`, `filiere`, `tel`) 
            VALUES (NULL,'$nom','$prn','$filier','$tel')";
    
    mysqli_query($conn,$sql) or die(mysqli_error($conn));

    mysqli_close($conn);
}

?>
