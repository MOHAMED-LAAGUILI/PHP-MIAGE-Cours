<?php

/* Cookies */

    //Creation des cookies
   setcookie("CookieName1","AAA", time() + (68400 * 30),"/"); // 86400 = 1 day
   setcookie("CookieName2","bbb");

   // Affichage de cookie
   if (isset($_COOKIE['CockieName1']) && (isset($_COOKIE['CockieName2'])) ) {
    echo $_COOKIE['CookieName1'] . "</br>";
    echo $_COOKIE['CookieName2'];
   }

   // Suppression des cookie
   setcookie('CookieName1', '', time()-1000,'/');


/* Sessions */

   // Creation de la session
   session_start();
   $_SESSION['user'] = "saidlergili@gmail";
   $_SESSION['pass'] = "test2023";

   // Affichage des sessions
   echo  $_SESSION['user'] . "<br>" . $_SESSION['pass'];

   // Quitter Session
   session_unset();
   session_destroy();



/* File upload */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" enctype="multipart/form-data">
    <input type="file" name="myfile">
    <input type="submit" value="Upload" name="upload">
</form>
    
</body>
</html>

<?php
if(isset($_POST['upload'])){
    $target = "images/".basename($_FILES['myfile']['name']);
    move_uploaded_file($_FILES['myfile']['tmp_name'],$target);
    echo "File has been uploaded su to ...";
}
?>