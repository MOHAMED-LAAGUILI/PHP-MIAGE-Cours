<!-- Passage des  parametre-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" action="search.php">
  <input type="text" name="nom">
  <input type="" name="prenom">
  <input type="submit" value="send" name="submit">
</form>

<?php 
if(isset($_POST["submit"])){
    echo $_POST["nom"];
    echo $_POST["prenom"];

}
?>
</body>
</html>

