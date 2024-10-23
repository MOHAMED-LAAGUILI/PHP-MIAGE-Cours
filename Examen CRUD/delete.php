<?php
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  require 'config.php';
  $sql = "DELETE FROM `etudiant` WHERE id=$id";
  mysqli_query($cn, $sql) or die(mysqli_error($cn));
  mysqli_close($cn);
  header('location:index.php');
}
