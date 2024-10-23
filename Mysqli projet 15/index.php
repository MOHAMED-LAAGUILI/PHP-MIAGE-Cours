
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
  .panel{
    width: 100%;
    margin: 30px;
  }

</style>
</head>
<body>

<?php include 'inc/nav.php'  ?>

<div class="container text-center ">
  <div class="jumbotron">
    <h1>System de gestion des notes</h1>
    <div style="display: flex; justify-content: space-between;">
    <div class="panel panel-primary ">
      <div class="panel-heading">Etudiants</div>
      <div class="panel-body  h3">
      <?php  
      require 'config.php';
      $sql = "SELECT COUNT(*) FROM `etudiant`";
      $result=mysqli_query($cn,$sql) or die(mysqli_error($cn));
      if($row=mysqli_fetch_array($result)) echo $row[0] ?>
      </div>
    </div>
    <div class="panel panel-primary ">
      <div class="panel-heading">Modules</div>
      <div class="panel-body  h3">
      <?php  
      $sql = "SELECT COUNT(*) FROM `modules`";
      $result=mysqli_query($cn,$sql) or die(mysqli_error($cn));
      if($row=mysqli_fetch_array($result)) echo $row[0] ?>
      </div>
    </div>
    <div class="panel panel-primary ">
      <div class="panel-heading">Exams</div>
      <div class="panel-body  h3">
      <?php  
      $sql = "SELECT COUNT(*) FROM `exam`";
      $result=mysqli_query($cn,$sql) or die(mysqli_error($cn));
      if($row=mysqli_fetch_array($result)) echo $row[0] ?>
      </div>
    </div>
</div>
  </div>
</div>


</body>
</html>
