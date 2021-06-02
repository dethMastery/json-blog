<?php
    $call = file_get_contents('backend/db/blog.json');
    $decode = json_decode($call);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog | Detzz.In.Th</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="asset/logo.png" type="image/x-icon">

    <!-- Main Css -->
    <link rel="stylesheet" href="asset/index.css">

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@200&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>
    <!-- Nav -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-alpha p-3 fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="asset/logo.png" alt="logo" srcset="asset/logo.png" width="30px" height="auto"> Detzz</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item" style="float: right;">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blog.php">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header -->
    <header>
        <div class="header-img">
            <div class="blacking mid">

            </div>
        </div>
    </header>

    <!-- About -->
    <section id="about">
        <div class="container">
            <h3>
                <b>
                    About
                    <hr>
                </b>
            </h3>
            <p>
                Hiya! I'm <strong>Detzz</strong> who is a Junior Front-End Developer. I'm tried to making something new for me whatever it sucks for someone who seeing this blog.
            </p>
        </div>
    </section>

    <!-- Lastest Post -->
    <section id="lastest-post">

    </section>

    <!-- Footer-->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12 mb-2">

                </div>

                <div class="col-lg-3 col-md-6 col-12 mb-2">

                </div>

                <div class="col-lg-3 col-md-6 col-12 mb-2">

                </div>
            </div>
        </div>
    </footer>

    <!-- Script Embed -->
    <!-- Bootstrap Set up -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>

</html>