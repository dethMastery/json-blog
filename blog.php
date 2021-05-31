<?php
$call = file_get_contents('backend/db/blog.json');
$decode = json_decode($call);
?>

้
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Content | Detzz.In.Th</title>

    <!-- Main Css -->
    <link rel="stylesheet" href="asset/blog.css">

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@200&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>

    <!-- Article Listing -->
    <?php
        foreach ($decode as $b) {
    ?>
        <div class="card" style="width: 18rem;">
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
                <form action="read_blog.php" method="get">
                    <input type="text" value="<?php echo $b->id ?>" class="none" name="id">
                    <button type="submit" class="btn btn-primary">
                        Read More..
                    </button>
                </form>
            </div>
        </div>
    <?php
        }
    ?>

</body>

</html>