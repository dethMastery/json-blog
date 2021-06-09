<?php
session_start();
if (!isset($_SESSION["login"]) && $_SESSION["login"] != true) {
    header("location: ../backend/login.php");
    exit(0);
}

    $id = $_POST['id'];

    $call = file_get_contents('db/blog.json');
    $out = json_decode($call, true);

    echo $out[$id]['content'];
?>