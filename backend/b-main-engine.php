<?php
session_start();
if (!isset($_SESSION["login"]) && $_SESSION["login"] != true) {
    header("location: ../backend/login.php");
    exit(0);
}

$main = file_get_contents('db/main.json');
$m_call = json_decode($main, true);

$m_call[0]['domain'] = $_GET['domain'];

?>