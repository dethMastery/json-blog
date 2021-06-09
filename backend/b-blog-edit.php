<?php
session_start();
if (!isset($_SESSION["login"]) && $_SESSION["login"] != true) {
    header("location: ../backend/login.php");
    exit(0);
}

$id = $_POST['id'];
// read file
$data = file_get_contents('db/blog.json');

// decode json to array
$json_arr = json_decode($data, true);

foreach ($json_arr as $key => $value) {
    if ($value['id'] == $id) {
        $json_arr[$key]['Sports'] = "Foot Ball";
    }
}

// encode array to json and save to file
file_put_contents('db/blog.json', json_encode($json_arr));
?>
