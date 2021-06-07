<?php
$call = file_get_contents('db/main.json');
$m_call = json_decode($call, true);

session_start();
if (isset($_POST['Username']) && isset($_POST['Password'])) {

    $user = $m_call[0]['backend']['username'];
    $pass = $m_call[0]['backend']['password'];
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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $m_call[0]['backend']['title'] . $m_call[0]['domain']; ?></title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="../<?php echo $m_call[0]['icon']; ?>" type="image/x-icon">

    <!-- Main Css -->
    <link rel="stylesheet" href="/asset/backend-login.css">

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@200&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <br>
        <div class="row">
            <h2>
                BackEnd System
            </h2>
        </div>
        <br>
        <div class="row">
            <div class="col-md-3 col-12">

            </div>
            <div class="col-md-6 col-12">
                <div class="form-container bg-dark">
                    <form name="formlogin" method="post" action="login.php">
                        <p> Username :
                            <input type="text" name="Username" placeholder="ชื่อผู้ใช้" required>
                        </p>
                        <p> Password :
                            <input type="password" name="Password" placeholder="รหัสผ่าน" required>
                        </p>
                        <p>
                            <button type="submit" class="btn btn-primary">Login</button><br>
                        </p>
                    </form>
                </div>
            </div>
            <div class="col-md-3 col-12">

            </div>
        </div>
    </div>

</body>

</html>