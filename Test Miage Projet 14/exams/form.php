
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
    Etudiant : <br>
    <select name="idetudiant" id="" class="form-control">
        
    <?php  
            $sql = "SELECT * FROM `etudiant`;";
            require '../config.php';
            $result = mysqli_query($cn, $sql) or die(mysqli_error($cn));
            while ($row = mysqli_fetch_array($result)) {  ?>
                <option value="<?php echo $row[0] ?>"><?php echo $row[0] ?> - <?php echo $row[1] ?> - <?php echo $row[2] ?> - <?php echo $row[3] ?></option>
            <?php
            }
            mysqli_close($cn);
            ?>
    </select>
</div>
<div class="form-group">
    Module : <br>
    <select name="idModule" id="" class="form-control">
    <?php  
            $sql = "SELECT * FROM `modules`;";
            require '../config.php';
            $result = mysqli_query($cn, $sql) or die(mysqli_error($cn));
            while ($row = mysqli_fetch_array($result)) {  ?>
                <option value="<?php echo $row[0] ?>"><?php echo $row[0] ?> - <?php echo $row[1] ?> </option>
            <?php
            }
            mysqli_close($cn);
            ?>
    </select>
</div>
<div class="form-group">
Date Exam : <br>
    <input type="date" name="dateExam" id="" class="form-control" > 
</div>
<div class="form-group">
Note : <br>
    <input type="number" name="note" max="20" min="0" id="" class="form-control" > 
</div>
<div class="form-group">
Observation : <br>
    <textarea name="observation" id="" cols="30" rows="10" class="form-control"></textarea>
</div>
<button type="submit" class="btn btn-default" name="save">Enregistrer</button>
</form>
</div>
</body>
</html>


<?php
if(isset($_POST['save'])){
    $idetudiant=$_POST['idetudiant'];
    $idModule=$_POST['idModule'];
    $dateExam=$_POST['dateExam'];
    $note=$_POST['note'];
    $observation=$_POST['observation'];
require '../config.php';
$sql = "INSERT INTO `exam` (`id`, `idEtudiant`, `idModule`, `dateExam`, `note`, `observation`) VALUES 
(NULL, '$idetudiant', '$idModule', '$dateExam', '$note', ' $observation');";
mysqli_query($cn,$sql) or die(mysqli_error($cn));
mysqli_close($cn);
echo 'Exam est bien enregistrer';
}

