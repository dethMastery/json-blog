<?php
session_start();
if (!isset($_SESSION["login"]) && $_SESSION["login"] != true) {
    header("location: ../backend/login.php");
    exit(0);
}

$id = $_POST['id'];

$get = file_get_contents('db/blog.json');
$json_arr = json_decode($get, true);

$arr_index = array();
foreach ($json_arr as $key => $value) {
    if ($value['id'] == $id) {
        $arr_index[] = $key;
    }
}

foreach ($arr_index as $i) {
    unset($json_arr[$i]);
}

$json_arr = array_values($json_arr);

file_put_contents('db/blog.json', json_encode($json_arr));

echo "<script>";
echo "alert(\"UwU finished delete your data\");";
echo "window.history.back()";
echo "</script>";
?>