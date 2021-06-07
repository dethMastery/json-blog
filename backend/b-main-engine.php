<?php
$main = file_get_contents('db/main.json');
$m_call = json_decode($main, true);

$m_call[0]['domain'] = $_GET['domain'];

?>