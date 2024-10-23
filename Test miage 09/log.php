<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>log</title>
  <link rel="stylesheet" href="style.css">
  <style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>

<body>

  <?php
  require 'src/menu.php';
  if (!isset($_SESSION['typeU'])) {
    header('location:login.php');
  }
  ?>

  <h2>Log page</h2>

  <table id="customers">
  <tr>
    <th>Date</th>
    <th>User</th>
    <th>Action</th>
  </tr>

  <?php
  if ($_SESSION['typeU'] == 'admin') { 
        $myfile=fopen("log.txt","r");
        while(!feof($myfile)){   
         $line=explode("#",fgets($myfile));
        ?>
        <tr>
            <td><?php echo $line[0];  ?></td>
            <td><?php echo $line[1];  ?></td>
            <td><?php echo $line[2];  ?></td>
        </tr>
        <?php   }
        fclose($myfile); 
} else {
    header('location:secrete1.php');
  }

  ?>
</table>
</body>

</html>