<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="/Mysqli">MIAGE K.K</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="/Mysqli">Home</a></li>

      <?php session_start(); if($_SESSION['typeU']=="Admin") {?>
      <li><a href="/Mysqli/etudiant/">Etudiants</a></li>
      <li><a href="/Mysqli/modules/">Modules</a></li>
      <?php }?>

      <li><a href="/Mysqli/exams/">Exams</a></li>
    </ul>
   
    <ul class="nav navbar-nav navbar-right">
    <?php  if(isset($_SESSION['idU'])) {?>
      <li><a href="/Mysqli/users/logout.php"><span class="glyphicon glyphicon-log-out"></span> logout</a></li>
      <?php }?>
    </ul>
  </div>
</nav>

<?php

if(!isset($_SESSION['idU'])) header('location:/Mysqli/users/login.php');
//if($_SESSION['typeU']=='Etudiant') header('location:/Mysqli/index.php');
?>