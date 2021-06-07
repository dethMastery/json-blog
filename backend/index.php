<?php
session_start();
if (!isset($_SESSION["login"]) && $_SESSION["login"] != true) {
    header("location: ../backend/login.php");
    exit(0);
}

$main = file_get_contents('db/main.json');
$m_call = json_decode($main, true);

$call = file_get_contents('db/blog.json');
$out = json_decode($call);
$decode = array_reverse($out);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Backend</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="../<?php echo $m_call[0]['icon']; ?>" type="image/x-icon">

    <!-- Main Css -->
    <link rel="stylesheet" href="/asset/backend/index.css">

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@200&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>
    <div class="main-container">
        <div class="container">
            <br>
            <div class="row">
                <div class="col-10">
                    <h1>
                        Backend Containment
                    </h1>
                </div>
                <div class="col-2">
                    <div class="d-grid gap-2">
                        <a href="logout.php">
                            <button class="OwO btn-lg btn btn-danger">
                                Logout
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-1"></div>
                <div class="col-4">
                    <div class="d-grid gap-2">
                        <a href="b-main.php">
                            <button class="OwO btn btn-lg btn-primary">
                                Main Editor
                            </button>
                        </a>
                    </div>
                </div>
                <div class="col-2"></div>
                <div class="col-4">
                    <div class="d-grid gap-2">
                        <a href="b-blog.php">
                            <button class="OwO btn btn-lg btn-primary">
                                Blog Editor
                            </button>
                        </a>
                    </div>
                </div>
                <div class="col-1"></div>
            </div>
        </div>
    </div>

    <!-- Copyright -->
    <footer id="copyright" class="p-4 text-center">
        &copy; <span id="copyright-year"></span> <a href="https://detzz.in.th" target="_blank">Suphakit P.</a> All Right Reserved
    </footer>

    <!-- Script Embed -->
    <!-- Year -->
    <script>
        var today = new Date();
        var y = today.getFullYear();
        document.getElementById('copyright-year').innerHTML = y;
    </script>

    <!-- Bootstrap Set up -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>

</html>