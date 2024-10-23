<?php

     
require("connection.php");



$sql = "SELECT * FROM `etudiant`";

$result = mysqli_query($conn,$sql) or die(mysqli_error($conn));

while ($col = mysqli_fetch_array($result)) {
   //  echo $col['nom']."<br/>";
    echo $col[1]."<br/>";
}


mysqli_close($conn);
?>
