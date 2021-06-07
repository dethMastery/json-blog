<?php
$call = file_get_contents('db/main.json');
$use = json_decode($call);

session_start();
if (isset($_POST['Username']) && isset($_POST['Password'])) {

    $user = $use[0]['backend']['username'];
    $pass = $use[0]['backend']['password'];
    if ($_POST['Username'] == $user && $_POST['Password'] == $pass) {
        $_SESSION["login"] = true;
        header("location: /backend/");
        exit(0);
    } else {
        echo "<script>
        ";
        echo "alert(\"Username or Password is invalid\");";
        echo "window.history.back()";
        echo "
    </script>";
    }
}
?>