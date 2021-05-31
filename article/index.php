<?php
$id = $_GET['id'];
$call = file_get_contents('../backend/db/blog.json');
$decode = json_decode($call, true);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $decode[$id]['title']; ?> | Detzz.in.th</title>

    <!-- Main css -->
    <link rel="stylesheet" href="../asset/article.css">

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@200&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>
    <header>
        <?php
        if ($decode[$id]['img'] === "") {
            echo "<img src='../asset/no_img.png' class='card-img-top' alt='header-img'>";
        } else {
            echo "<img src='" . $decode[$id]['img'] . "' class='card-img-top' alt='header-img'>";
        }
        ?>

        <h1 class="text-center">
            <strong>
                <?php
                echo $decode[$id]['title'];
                ?>
            </strong>
        </h1>
    </header>

    <article id="main-article">
        <section class="container">
            <?php
            echo $decode[$id]['content'];
            ?>
        </section>
    </article>

    <!-- Script Embed -->
    <!-- Bootstrap Set up -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>

</html>