<?php
if(isset($_POST['edit1'])){
require('config.php');
$id=$_POST['id'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$tele = $_POST['tele'];
$sql = "UPDATE `etudiants` SET `fname`='$fname',`lname`='$lname',`email`='$email',`tele`='$tele' WHERE `id`=$id";
mysqli_query($db,$sql) or die("Erreur query");
echo "Etudiant est bien modifier ?";
mysqli_close($db);  
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(isset($_POST['id'])){
        $id=$_POST['id'];
        require('config.php');
        $sql = "SELECT * FROM `etudiants` where id=$id";
        $result=mysqli_query($db,$sql) or die("Erreur query");
        if ($row=mysqli_fetch_array($result)) {
    ?>
    <form action="" method="post">
    <pre>  <input type="hidden" name="id" value="<?php echo $row[0] ?>">
    First name   <input type="text" name="fname" value="<?php echo $row[1] ?>" >

    laste name   <input type="text" name="lname" value="<?php echo $row[2] ?>" >

    Email        <input type="email" name="email" value="<?php echo $row[3] ?>">

    Telephone    <input type="tele" name="tele" value="<?php echo $row[4] ?>">

                  <input type="submit" name="edit1" value="Edit">
    </pre>
    </form>
    <?php
        mysqli_close($db);
        }
        }else
        header("location:search.php");
    ?>
</body>
</html>

