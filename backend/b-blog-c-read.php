<?php
    $id = $_POST['id'];

    $call = file_get_contents('db/blog.json');
    $out = json_decode($call, true);

    echo $out[$id]['content'];
?>