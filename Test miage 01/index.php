

<?php 

// exercice 1

echo "<h2> Ceci est une ligne créée uniquement en PHP </h2>";
echo "<h3> Ceci est la 2ème phrase créée avec PHP </h3>";
echo " <a href=https://www.google.com/> Google </a> ";
echo "<br/>";

// exercice 2

$nom = "Dupon";
$prenom = "Louis";

echo "Nom : $nom";
echo "<br/>";
echo "Prenom : $prenom";
echo "<br/>";
echo "Nom : " . $nom;
echo "<br/>";
echo "Prenom : " . $prenom;

// exercice 3

define("TVA",0.206);
$prix = 150;
$nombre = 10;
$HT = $nombre * $prix;
$TTC = $HT + ($HT * TVA);
 
// exercice 4

$prix_livre = 150;
$prix_revenue = 100;
$nombre = 10;

$pht1 =  $prix_revenue * $nombre;
$pht2 =  $prix_livre  * $nombre;

if($pht1 < $pht2){
    echo "<h1> Prix hors taxe = $pht2 de revenue est plus </h1>";
}else{
    echo "<h1> Prix hors taxe = $pht1 des livres est plus </h1>";
}

// exercice 5

$nbre = 50;

for ($i = 1; $i <= $nbre; $i++):
if(!($i%2==0)){continue;}
    echo $i . "<br/>";
endfor;

echo "<br/> <br/>";

/*
$c = 1;
while ($c < $nbre):
if(!($c%2==0)){continue;}
    echo $c . "<br/>";
    $c++;
endwhile;
*/


// exercice 6

$today = date("d/m/y");  
$time = date("H:i"); 

echo "Nous sommes le : " . $today . "<br/>";
echo "Il est : " . $time . "<br/>";
echo "Merci";
echo "<br/> <br/>";


// exercice 7

echo 'User IP Address = '. $_SERVER['REMOTE_ADDR'];
echo "<br/> <br/>";
echo 'Host = '. $_SERVER["HTTP_HOST"];
 echo "<br/> <br/>";
$num = "55-225-88";
$arr = explode("-",$num);
foreach($arr as $i){echo $i.".";}




  




?>

<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <!-- exercice 3 -->
    
    <h1> <?php echo "Prix Hors Taxes = " . $HT . "<br/>"?> </h1>
    <h1> <?php echo "Prix TTC = ". $TTC . "<br/>"?> </h1>
    <h2> <?php echo var_dump($HT) . "<br/>"?> </h2>
    <h2> <?php echo var_dump($TTC) . "<br/>"?> </h2>
    <h2> <?php echo var_dump(TVA) . "<br/>"?> </h2>
    <h2> <?php echo var_dump($prix) . "<br/>"?> </h2>
    <h2> <?php echo gettype($prix) . "<br/>"?> </h2>
</body>
</html>