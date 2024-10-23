<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br><br> <button ><a href="form.php">Ajouter</a></button><br><br>
    <table border="1">
    <tr>
        <th>#</th>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Filière</th>
        <th>Email</th>
        <th>Image</th>
        <th>Action</th>
    </tr>
   
    <?php
    require '../config.php';
    $sql = "SELECT * FROM `etudiant`;";
    $result=mysqli_query($cn,$sql) or die(mysqli_error($cn));
    while($row=mysqli_fetch_array($result)){  ?>
      <tr>
          <td><?php echo $row[0] ?></td>
          <td><?php echo $row[1] ?></td>
          <td><?php echo $row[2] ?></td>
          <td><?php echo $row[3] ?></td>
          <td><?php echo $row[4] ?></td>
          <td><img src="<?php echo $row[5] ?>" width="54px" ></td>
          <td>
              <a href="delete.php?id=<?php echo $row[0] ?>">❌</a>
              <a href="edit.php?id=<?php echo $row[0] ?>">✏️</a>
          </td>
      </tr>
    <?php
    }
    mysqli_close($cn);
    ?>
     </table>
</body>
</html>