<?php
$main = file_get_contents('backend/db/main.json');
$m_call = json_decode($main, true);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $m_call[0]['about']['title'] . $m_call[0]['domain']; ?></title>

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
            background: url('<?php echo $m_call[0]['about']['header-img']; ?>');
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
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">About</a>
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
                    echo $m_call[0]['about']['header'];
                    ?>
                </h1>
                <h5 class="sub-header">
                    <?php
                    echo $m_call[0]['about']['subheader'];
                    ?>
                </h5>
            </div>
            <div class="blacking"></div>
        </div>
    </header>

</body>

</html>