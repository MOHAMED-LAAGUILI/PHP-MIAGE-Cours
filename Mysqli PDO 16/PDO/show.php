<?php
//methode 1
require('config.php');
$result=$conn->query("SELECT * FROM `etudiants`");
while ($row=$result->fetch()) {
    echo $row[0] . "  " . $row[1]. "<br>";
}
$conn=null;
?>


<?php
//methode 2 (prepare more secure)
require('config.php');
$result=$conn->prepare("SELECT * FROM `etudiants`");
$result->execute();
while ($row=$result->fetch()) {
    echo $row[0] . "    " . $row[1]. "<br>";
}
$conn=null;
?>