<ul>
    <?php
    session_start();
    if (isset($_SESSION['typeU'])) {
        if ($_SESSION['typeU'] == "admin") { ?>
           
            <li><a href="secrete1.php">Secrete 1</a></li>
            <li><a href="secrete2.php">Secrete 2</a></li>
            <li><a href="log.php">Log</a></li>
            <li style="float:right"><a class="" href="logout.php">Logout</a>
            
            <?php  } else {  ?>

            <li><a href="secrete1.php">Secrete 1</a></li>
            <li style="float:right"><a class="" href="logout.php">Logout</a>
           
           <?php
        }
    } else {  ?>
            <li><a href="login.php">Login</a></li>
       <?php }
        ?>
</ul>