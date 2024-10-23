<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <pre>
    First name   <input type="text" name="fname" id="">

    laste name   <input type="text" name="lname" id="">

    Email        <input type="email" name="email" id="">

    Telephone    <input type="tele" name="tele" id="">

                  <input type="submit" name="save" value="save">
    </pre>
    </form>
</body>
</html>
<?php
if(isset($_POST['save'])){
    require('config.php');
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $tele = $_POST['tele'];
require('config.php');
$sql=$conn->prepare("INSERT INTO `etudiants` (`id`, `fname`, `lname`, `email`, `tele`) VALUES (NULL, '$fname', '$lname', '$email', '$tele')");
$sql->execute();
echo "Etudiant est bien enregistrer ?";
$conn=null;
}
?> 
