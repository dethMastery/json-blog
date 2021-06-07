<?php
$main = file_get_contents('../backend/db/main.json');
$m_call = json_decode($main, true);

$id = $_GET['id'];
$call = file_get_contents('../backend/db/blog.json');
$decode = json_decode($call, true);

if ($decode[$id]['img'] === "") {
    $i = "../asset/no_img.png";
} else {
    $i = $decode[$id]['img'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $decode[$id]['title'] . " | " . $m_call[0]['domain']; ?></title>

    <!-- Social Controlling -->
    <meta property="og:type" content="article" />
    <meta property="og:image" content="<?php echo $i ?>" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="../<?php echo $m_call[0]['icon']; ?>" type="image/x-icon">

    <!-- Main css -->
    <link rel="stylesheet" href="../asset/article.css">

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@200&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <!-- Style Controller -->
    <style>
        .header-container {
            background: url('<?php echo $i; ?>');
            width: 100%;
            margin: 0;
            height: 50vh;
        }
    </style>
</head>

<body>
    <!-- Nav -->
    <nav class="navbar navbar-expand-lg navbar-dark p-3 fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="../">
                <img src="<?php echo "../" . $m_call[0]['icon']; ?>" alt="logo" width="30px" height="auto"> Detzz
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="../">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../blog.php">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../contact.php">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header -->
    <header>
        <div class="header-container">
            <?php
            if ($decode[$id]['youtube_id'] === "") {
                echo "<div class='blacking'></div>";
            } else {
                echo "<iframe src='https://www.youtube.com/embed/".$decode[$id]['youtube_id']."' frameborder='0' allow='accelerometer; encryped-media; picture-in-picture' allowfullscreen></iframe>";
            };
            ?>
        </div>
    </header>

    <!-- Article -->
    <article id="main-article" class="p-5">
        <span>
            <button onclick="goBack()" class="btn btn-primary">
                <-- Back </button>
        </span>
        <br><br>
        <h1 class="pb-3">
            <strong>
                <?php
                echo $decode[$id]['title'];
                ?>
            </strong>
            <hr>
        </h1>
        <section class="container">
            <h5>
                <?php
                echo $decode[$id]['content'];
                ?>
            </h5>
        </section>
    </article>

    <article id="credit" class="p-5">
        <h3>
            <span>Credits :</span>
            <hr>
        </h3>
        <h4>
            <ul>
                <li>
                    <a href="<?php echo $decode[$id]['credit']['link_1']; ?>" target="_blank"><?php echo $decode[$id]['credit']['link_1']; ?></a>
                </li>
                <li>
                    <a href="<?php echo $decode[$id]['credit']['link_2']; ?>" target="_blank"><?php echo $decode[$id]['credit']['link_2']; ?></a>
                </li>
                <li>
                    <a href="<?php echo $decode[$id]['credit']['link_3']; ?>" target="_blank"><?php echo $decode[$id]['credit']['link_3']; ?></a>
                </li>
                <li>
                    <a href="<?php echo $decode[$id]['credit']['link_4']; ?>" target="_blank"><?php echo $decode[$id]['credit']['link_4']; ?></a>
                </li>
            </ul>
        </h4>

    </article>



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

        function goBack() {
            window.history.back();
        }
    </script>

    <!-- Bootstrap Set up -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>

</html>