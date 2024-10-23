<?php
try {
  $conn = new PDO("mysql:host=localhost;dbname=miage","root","") or die ("Erreur");
} catch (Throwable $th) {
  echo $th;
}

?> 