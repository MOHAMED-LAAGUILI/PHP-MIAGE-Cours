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
    <div class="container">
        <br><br> <h1>Exams</h1> <br>
        <br><br> <button><a href="form.php">Ajouter</a></button><br><br>
        <form action="" method="get" style="text-align: right;">
        <input type="search" name="search" placeholder="Rechercher">
        </form><br>
        <table class="table table-striped">
            <tr>
                <th>#</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Module</th>
                <th>Date</th>
                <th>Note</th>
                <th>Observation</th>
                <th>montion</th>
                <th>Action</th>
            </tr>

            <?php
            if(isset($_GET['search'])){
                $search=$_GET['search'];
                $sql = "SELECT `exam`.`id`, `etudiant`.`nom`, `etudiant`.`prenom`, `modules`.`nom`, `exam`.`dateExam`, `exam`.`note`, `exam`.`observation`
                FROM `exam` 
                    LEFT JOIN `etudiant` ON `exam`.`idEtudiant` = `etudiant`.`id` 
                    LEFT JOIN `modules` ON `exam`.`idModule` = `modules`.`id`
                    WHERE `exam`.`id` like '%$search%'";
            }else{
                $sql = "SELECT `exam`.`id`, `etudiant`.`nom`, `etudiant`.`prenom`, `modules`.`nom`, `exam`.`dateExam`, `exam`.`note`, `exam`.`observation`
                FROM `exam` 
                    LEFT JOIN `etudiant` ON `exam`.`idEtudiant` = `etudiant`.`id` 
                    LEFT JOIN `modules` ON `exam`.`idModule` = `modules`.`id`;";
            } 
            require '../config.php';
            $result = mysqli_query($cn, $sql) or die(mysqli_error($cn));
            while ($row = mysqli_fetch_array($result)) {  ?>
                <tr>
                    <td><?php echo $row[0] ?></td>
                    <td><?php echo $row[1] ?></td>
                    <td><?php echo $row[2] ?></td>
                    <td><?php echo $row[3] ?></td>
                    <td><?php echo $row[4] ?></td>
                    <td><?php echo $row[5] ?></td>
                    <td><?php echo $row[6] ?></td>
                    <td><?php echo ($row[5]>=10) ?  'Admis':'Non Admin'; ?></td>
                    <td>
                        <a href="delete.php?id=<?php echo $row[0] ?>">❌</a>
                        <a href="edit.php?id=<?php echo $row[0] ?>">✏️</a>
                    </td>
                </tr>
            <?php
            }
            mysqli_close($cn);
            ?>
        </table>
    </div>
</body>

</html>