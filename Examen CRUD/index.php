<form method="get">
<input type="search" name="srch">
</form>

<br><br> <button><a href="form.php">Ajouter</a></button><br><br>
<table border="1">
    <tr>
        <th>#</th>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Filière</th>
        <th>Email</th>
        <th>Action</th>
    </tr>

    <?php
    require 'config.php';
    if (isset($_GET['srch'])) {
        $srch = $_GET['srch'];
        if(!empty($_GET['srch']))
        $sql = "SELECT * FROM `etudiant` WHERE `id` LIKE '%$srch%';";
        else
        $sql = "SELECT * FROM `etudiant`;";
    }else{
        $sql = "SELECT * FROM `etudiant`;";
    }
    $result = mysqli_query($cn, $sql) or die(mysqli_error($cn));
    while ($line = mysqli_fetch_array($result)) {  ?>
        <tr>
            <td><?php echo $line[0] ?></td>
            <td><?php echo $line[1] ?></td>
            <td><?php echo $line[2] ?></td>
            <td><?php echo $line[3] ?></td>
            <td><?php echo $line[4] ?></td>
              <td>
                <a href="delete.php?id=<?php echo $line[0] ?>">
                    <button type="button">Supprimer</button>
                </a>
                <a href="edit.php?id=<?php echo $line[0] ?>">
                    <button type="button">Modifier</button>
                </a>
            </td>
        </tr>
    <?php
    }
    mysqli_close($cn);
    ?>
</table>