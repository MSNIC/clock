<?php
$file = $_POST['url'];
$xml = simplexml_load_file($file);
echo(json_encode($xml))
?>