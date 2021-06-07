<?php
$main = file_get_contents('backend/db/main.json');
$m_call = json_decode($main, true);

$call = file_get_contents('backend/db/blog.json');
$out = json_decode($call);
$decode = array_reverse($out);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $m_call[0]['index']['title']; echo $m_call[0]['Domain']; ?></title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo $m_call[0]['icon']; ?>" type="image/x-icon">

    <!-- Main Css -->
    <link rel="stylesheet" href="asset/index.css">

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@200&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <!-- Style Control -->
    <style>
        .header-img {
            background: url('<?php echo $m_call[0]['index']['header-img']; ?>');
            width: 100%;
            height: 100vh;
            background-position: center;
        }
    </style>
</head>

<body>
    <!-- Nav -->
    <nav class="navbar navbar-expand-lg navbar-dark p-3 fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="<?php echo $m_call[0]['icon']; ?>" alt="logo" srcset="asset/logo.png" width="30px" height="auto"> Detzz</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blog.php">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header -->
    <header>
        <div class="header-img">
            <div class="mid">
                <h1 class="header text-white">
                    <?php
                    echo $m_call[0]['index']['header'];
                    ?>
                </h1>
                <h5 class="sub-header">
                    <?php
                    echo $m_call[0]['index']['subheader'];
                    ?>
                </h5>
            </div>
            <div class="blacking"></div>
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
                <?php
                echo $m_call[0]['index']['about'];
                ?>
            </p>
        </div>
    </section>

    <!-- Lastest Post -->
    <section id="lastest-post">
        <div class="container">
            <h3>
                <b>
                    Lastest post
                </b>
                <hr>
            </h3>
        </div>
        <div class="container">
            <div class="row">
                <?php
                $i = 0;
                foreach ($decode as $b) {
                    $i++;
                ?>
                    <div class="card-con col-md-4 col-sm-6 col-12">
                        <div class="card">
                            <?php
                            if ($b->img === "") {
                                echo "<img src='asset/no_img.png' class='card-img-top' alt='header-img'>";
                            } else {
                                echo "<img src='" . $b->img . "' class='card-img-top' alt='header-img'>";
                            }
                            ?>
                            <div class="card-body">
                                <h5 class="card-title">
                                    <center>
                                        <?php
                                        echo $b->title;
                                        ?>
                                    </center>
                                </h5>
                                <p class="card-text">
                                    <?php
                                    echo $b->preview_c;
                                    ?>
                                </p>
                                <form action="article/" method="get">
                                    <input type="text" value="<?php echo $b->id ?>" class="none" name="id">
                                    <button type="submit" class="btn btn-primary">
                                        Read More..
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                <?php
                    if ($i == 3) {
                        break;
                    }
                }
                ?>
            </div>
            <div style="float: right;">
                <h4>
                    <a href="blog.php">
                        <b>
                            More post ->
                        </b>
                    </a>
                </h4>
            </div>
            <div style="clear: both;"></div>
        </div>
    </section>

    <!-- Footer-->
    <footer id="footer" class="p-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-12 mb-4">
                    <h4>
                        <img src="<?php echo $m_call[0]['icon']; ?>" alt="logo" width="30">
                        Detzz
                    </h4>
                    <hr>
                    <ul>
                        <li class="nav-item">
                            <a class="nav-link" target="_blank" href="tel:+66827187962">Tel. Number</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" target="_blank" href="mailto:contact@detzz.in.th">E-mail</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" target="_blank" href="https://nc.detzz.in.th">Namecard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" target="_blank" href="https://detzz.in.th">Homepage</a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-4 col-12 mb-4">
                    <h4>
                        Menu
                    </h4>
                    <hr>
                    <ul>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="blog.php">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-4 col-12 mb-4">
                    <h4>
                        Social Media Link
                    </h4>
                    <hr>
                    <ul>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Facebook
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Instagram
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Twitter
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Reddit
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

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