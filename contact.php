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
    <title><?php echo $m_call[0]['contact']['title'] . $m_call[0]['domain']; ?></title>

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
            background: url('<?php echo $m_call[0]['contact']['header-img']; ?>');
            width: 100%;
            height: 100vh;
            background-position: center;
        }
    </style>
</head>

<body>

</body>

</html>