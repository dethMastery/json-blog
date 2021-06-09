<?php
session_start();
if (!isset($_SESSION["login"]) && $_SESSION["login"] != true) {
    header("location: ../backend/login.php");
    exit(0);
}

    $call = file_get_contents('db/blog.json');
    $decode = json_decode($call);

    $decode[] = array(
        'id'=>$_POST['id'], 
        'img'=>$_POST['img'],
        'youtube_id'=>$_POST['yt-id'],
        'title'=>$_POST['title'],
        'preview_c'=>$_POST['pre-c'],
        'content'=>$_POST['content'],
        'credit' => array(
            'link_1' => $_POST['link-1'], 
            'link_2' => $_POST['link-2'], 
            'link_3' => $_POST['link-3'], 
            'link_4' => $_POST['link-4']
        )
    );

    file_put_contents('db/blog.json', json_encode($decode));
    echo "<script>";
    echo "alert(\"UwU finished add your data\");"; 
    echo "window.history.back()";
    echo "</script>";
?>