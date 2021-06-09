<?php
session_start();
if (!isset($_SESSION["login"]) && $_SESSION["login"] != true) {
    header("location: ../backend/login.php");
    exit(0);
}


?>