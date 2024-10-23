<?php include '../inc/nav.php'  ?>
<?php if($_SESSION['typeU']=='Etudiant') header('location:/Mysqli/index.php'); ?>

<?php
if(isset($_GET['id'])){
  $id=$_GET['id'];  
  require '../config.php';
$sql="DELETE FROM modules WHERE id=$id";
mysqli_query($cn,$sql) or die(mysqli_error($cn));
mysqli_close($cn);
header('location:index.php');
}
