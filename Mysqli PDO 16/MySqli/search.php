<?php
if(isset($_POST['delete'])){
require('config.php');
$id=$_GET['id'];
$sql = "DELETE FROM `etudiants` WHERE `id`=$id";
mysqli_query($db,$sql) or die("Erreur query");
echo "Etudiant est bien supprimer ?";
mysqli_close($db);  
}

?>
<pre>
    <form action="" method="get">
    Search   :  <input type="search" name="id" id="">
    </form> 
</pre>
<table border>
    <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Email</th>
        <th>Telephone</th>
        <th>Action</th>
    </tr>
<?php
if(isset($_GET['id'])){
$id=$_GET['id'];
require('config.php');
$sql = "SELECT * FROM `etudiants` where id=$id";
$result=mysqli_query($db,$sql) or die("Erreur query");
while ($row=mysqli_fetch_array($result)) {
    ?>
   <tr>
        <td><?php echo $row[0] ?></td>
        <td><?php echo $row[1] ?></td>
        <td><?php echo $row[2] ?></td>
        <td><?php echo $row[3] ?></td>
        <td><?php echo $row[4] ?></td>
        <td><form action="edit.php" method="post">
        <input type="hidden" name="id" value="<?php echo $row[0] ?>">
            <input type="submit" name="edit" value="✏">
        </form>
        <form action="" method="post">
            <input type="submit" name="delete"  value="🗑">
        </form>
    </td>
        
    </tr>

   <?php

mysqli_close($db);
}
}


?>
</table>




