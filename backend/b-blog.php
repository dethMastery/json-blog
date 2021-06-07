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
    <link rel="stylesheet" href="/asset/backend/blog-e.css">

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
                        <a href="#">
                            <button class="OwO btn btn-lg btn-primary" disabled>
                                Blog Editor
                            </button>
                        </a>
                    </div>
                </div>
                <div class="col-1"></div>
            </div>
        </div>

        <!-- Listing -->
        <section id="modify">
            <div class="container-fluid">
                <div class="row">
                    <!-- Adding Part -->
                    <div class="container">
                        <!-- Button trigger modal -->
                        <button type="button" class="OwO btn btn-primary" data-bs-toggle="modal" data-bs-target="#add">
                            Add Content
                        </button>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="add" tabindex="-1" aria-labelledby="addModal" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header bg-dark">
                                    <h5 class="modal-title text-white" id="exampleModalLabel">Adding Content</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="b-blog-add.php" method="post" id="adding">
                                    <div class="modal-body text-white bg-dark">
                                        <div class="row">
                                            <input type="number" name="id" class="col-2" placeholder="ID">
                                            <span class="col-1"></span>
                                            <input type="text" name="img" class="col-9" placeholder="IMG Link">
                                            <div class="col-12 text-dark">.</div>
                                            <input type="text" name="yt-id" class="col-12" placeholder="YT Video ID">
                                            <div class="col-12 text-dark">.</div>
                                            <textarea name="pre-c" width="100%" rows="3" placeholder="Preview Context"></textarea>
                                            <div class="col-12 text-dark">.</div>
                                            <textarea name="content" width="100%" rows="5" placeholder="Content"></textarea>
                                            <div class="col-12 text-dark">.</div>
                                            <span class="col-1">1.</span><input type="text" name="link-1" class="col-11" placeholder="Credit Link 1">
                                            <div class="col-12 text-dark">.</div>
                                            <span class="col-1">2.</span><input type="text" name="link-2" class="col-11" placeholder="Credit Link 2">
                                            <div class="col-12 text-dark">.</div>
                                            <span class="col-1">3.</span><input type="text" name="link-3" class="col-11" placeholder="Credit Link 3">
                                            <div class="col-12 text-dark">.</div>
                                            <span class="col-1">4.</span><input type="text" name="link-4" class="col-11" placeholder="Credit Link 4">
                                        </div>
                                    </div>
                                    <div class="modal-footer bg-dark">
                                        <button type="button" class="btn btn-secondary" onclick="reset()">Reset</button>
                                        <button type="submit" class="btn btn-primary">Added!!</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <br><br>
                <div class="row">
                    <div class="col-12">
                        <table>
                            <tr>
                                <th>
                                    ID
                                </th>
                                <th>
                                    IMG
                                </th>
                                <th>
                                    YT Video ID
                                </th>
                                <th>
                                    Title
                                </th>
                                <th>
                                    Preview Content
                                </th>
                                <th>
                                    Content
                                </th>
                                <th>
                                    Credit
                                </th>
                                <th>
                                    Controller
                                </th>
                            </tr>
                            <?php
                            foreach ($decode as $blog) {
                            ?>
                                <tr class="text-center">
                                    <td>
                                        <?php echo $blog->id ?>
                                    </td>
                                    <td>
                                        <img src="<?php echo $blog->img; ?>" alt="img" width="150px" height="auto">
                                    </td>
                                    <td>
                                        <?php echo $blog->youtube_id; ?>
                                    </td>
                                    <td>
                                        <?php echo $blog->title; ?>
                                    </td>
                                    <td>
                                        <?php echo $blog->preview_c; ?>
                                    </td>
                                    <td>
                                        <?php echo $blog->content; ?>
                                    </td>
                                    <td>
                                        <ul>
                                            <li>
                                                <a href="<?php echo $blog->credit->link_1; ?>" target="_blank">
                                                    Link 1
                                                </a>
                                            </li>
                                            <li>
                                                <a href="<?php echo $blog->credit->link_2; ?>" target="_blank">
                                                    Link 2
                                                </a>
                                            </li>
                                            <li>
                                                <a href="<?php echo $blog->credit->link_3; ?>" target="_blank">
                                                    Link 3
                                                </a>
                                            </li>
                                            <li>
                                                <a href="<?php echo $blog->credit->link_4; ?>" target="_blank">
                                                    Link 4
                                                </a>
                                            </li>
                                        </ul>
                                    </td>
                                    <td>
                                        <form action="b-blog-edit.php" method="post">
                                            <input type="text" value="<?php echo $blog->id ?>" class="none">
                                            <button class="OwO btn btn-warning" type="submit">
                                                Edit
                                            </button>
                                        </form>
                                        <form action="b-blog-del.php" method="post">
                                            <input type="text" value="<?php echo $blog->id ?>" class="none">
                                            <button class="OwO btn btn-danger" type="submit">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </table>
                    </div>
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

    <!-- Reset Form -->
    <script>
        function reset() {
            document.getElementById("adding").reset();
        }
    </script>

    <!-- Bootstrap Set up -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>

</html>