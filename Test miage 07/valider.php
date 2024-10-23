<?php 
    session_start();
    

    if(isset($_POST['submit'])){
        $loginUser = $_POST['email'];
        $loginPass = $_POST['password'];

        if($loginUser == "user" && $loginPass == "112233" || $loginUser =="Admin" && $loginPass ==  "Admin123"){
          $_SESSION['typeUser'] = $loginUser;
          setcookie("lastVisit",date("dd-mm-yyyy"));
            header('location:page1.php');
        }else{
            echo 'erreur';
        }

    }
    ?>