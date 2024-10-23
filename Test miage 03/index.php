<?php

function test1($n1, $n2){
return ($n1 * $n2);
}

$a = 10;
$b = 2;
print test1($a, $b);



$a = 10;
$b = 2;
function test2(){
    $a = 2;
    $b = 2;
       print ($a * $b);
    }
     test2();


$var1 = 1 ;
$var2 = 2 ;
$var3 = 3 ;
function affiche(){
global $var1;
echo '--> $var1='.$var1.'<br>';
echo '--> $var2='.$GLOBALS['var2'].'<br>';
// echo '--> $var3='. $var3; // error message
}
affiche();



function compte () {
    static $compteur = 0 ;
    $compteur++ ;
    echo "$compteur - " ;
    if ($compteur<10) compte(); // appel récursif de compte()
    }
    compte() ;

$time = time(); // date au format système
print '<br>';

$date = getdate($time); // passage de la variable time dans getdate
print 'Nous sommes le '.$date['mday'].' - '.$date['mon'].' –
'.$date['year']. ' il est '.$date['hours'].':'.$date['minutes'].':'.$date['seconds'];
    

   ?>
