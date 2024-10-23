<?php
session_start();
session_unset();
session_destroy();
header("location:/Mysqli/users/login.php");