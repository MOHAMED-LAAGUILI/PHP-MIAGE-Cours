<?php
/* Data base connection */
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'db001';

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
// $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

/* Test if connection is working */
if(!$conn){
     echo "error: mysqli_connect() failed" . mysqli_connect_error() or die("mysqli_connect");
    // exit();
}
//---------------------------------------------------------------------------------------------

/* Insert into data Base */
$sql = "INSERT INTO `etudiant`(`id`, `nom`, `prenom`, `filiere`, `tel`) 
        VALUES (NULL,'LAAGUILI','MOHAMED','TSDI','+212-6-89-77-08-09')";

/* Test if the query is working */
mysqli_query($conn,$sql) or die(mysqli_error($conn));

/* Close Connection */
mysqli_close($conn);
//cn->close();
?>