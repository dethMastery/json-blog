<?php
    $call = file_get_contents('backend/db/blog.php');
    $decode = json_decode($call);
?>

้<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Content | Detzz.In.Th</title>
</head>
<body>
    <?php
        foreach ($decode as $b) {
            
        }
    ?>
</body>
</html>