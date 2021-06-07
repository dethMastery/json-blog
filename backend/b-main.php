<?php
session_start();
if (!isset($_SESSION["login"]) && $_SESSION["login"] != true) {
    header("location: login.php");
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
    <title>Main Editor | BackEnd</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="../<?php echo $m_call[0]['icon']; ?>" type="image/x-icon">

    <!-- Main Css -->
    <link rel="stylesheet" href="/asset/backend/main-e.css">

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@200&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>
    <section class="main-container">
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
                        <a href="#">
                            <button class="OwO btn btn-lg btn-primary" disabled>
                                Main Editor
                            </button>
                        </a>
                    </div>
                </div>
                <div class="col-2"></div>
                <div class="col-4">
                    <div class="d-grid gap-2">
                        <a href="../backend/b-blog.php">
                            <button class="OwO btn btn-lg btn-primary">
                                Blog Editor
                            </button>
                        </a>
                    </div>
                </div>
                <div class="col-1"></div>
            </div>
        </div>

        <!-- Form  -->
        <section id="modify">
            <div class="container">
                <div class="row">
                    <div class="col-2"></div>
                    <div class="col-8">
                        <div class="container">
                            <div class="row">
                                <form action="b-main-engine.php" method="post" id="main">
                                    <h1><u>Global Part</u></h1>
                                    <input type="text" name="domain" placeholder="Domain" value="<?php echo $m_call[0]['domain']; ?>">
                                    <br><br>

                                    <h1><u>Index Part</u></h1>
                                    <input type="text" name="index-title" placeholder="Header IMG" value="<?php echo $m_call[0]['index']['title']; ?>">
                                    <input type="text" name="index-header-img" placeholder="Header IMG" value="<?php echo $m_call[0]['index']['header-img']; ?>">
                                    <input type="text" name="index-header" placeholder="Header" value="<?php echo $m_call[0]['index']['header']; ?>">
                                    <input type="text" name="index-subheader" placeholder="SubHeader" value="<?php echo $m_call[0]['index']['subheader']; ?>">
                                    <textarea type="text" name="index-about" placeholder="About" rows="5">
                                <?php echo $m_call[0]['index']['about']; ?>
                            </textarea>
                                    <br><br>

                                    <h1><u>Blog Part</u></h1>
                                    <input type="text" name="blog-title" placeholder="title" value="<?php echo $m_call[0]['blog']['title']; ?>">
                                    <input type="text" name="blog-header-img" placeholder="Header IMG" value="<?php echo $m_call[0]['blog']['header-img']; ?>">
                                    <input type="text" name="blog-header" placeholder="SubHeader" value="<?php echo $m_call[0]['blog']['header']; ?>">
                                    <input type="text" name="blog-subheader" placeholder="SubHeader" value="<?php echo $m_call[0]['blog']['subheader']; ?>">
                                    <br><br>

                                    <h1><u>BackEnd Part</u></h1>
                                    <input type="text" name="backend-title" placeholder="Title" value="<?php echo $m_call[0]['backend']['title']; ?>">
                                    <input type="text" name="backend-username" placeholder="username" value="<?php echo $m_call[0]['backend']['username']; ?>">
                                    <input type="password" name="backend-password" id="backend-password" placeholder="password" value="<?php echo $m_call[0]['backend']['password']; ?>" class="col-12">
                                    <br><br>
                                    <div class="row">
                                        <input type="checkbox" onclick="show()"> <span>Show Password</span>
                                    </div>

                                    <br><br>
                                    <button type="submit" class="btn btn-primary">
                                        Submit
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-2"></div>
                </div>
            </div>
        </section>
    </section>

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

    <!-- Showing Password -->
    <script>
        function show() {
            var x = document.getElementById("backend-password");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>

    <!-- Bootstrap Set up -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>

</html>