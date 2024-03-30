<?php
$ip = $_POST['ip'];
$dataa = $_POST['dataa'];
$userAgent = $_POST['userAgent'];

$file = 'db.txt';
$current = file_get_contents($file);
$current .= "IP: $ip\nDataa: $dataa\nUser Agent: $userAgent\n\n";
file_put_contents($file, $current);
?>