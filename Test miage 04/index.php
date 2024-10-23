<?php 


$myfile = fopen("test.txt", "a") or die("Unable to open file!");
fwrite($myfile,"hello world \n");
fclose($myfile);


$myfile = fopen("test.txt", "r") or die("Unable to open file!");
fread($myfile,filesize($myfile));


$myfile = fopen("test.txt", "r") or die("Unable to open file!");
while(!feof($myfile)){
    echo fgets($myfile);
}

echo readfile("test.txt");
?>