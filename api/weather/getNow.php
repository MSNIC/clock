<?php
$x = $_POST['cx'];
$y = $_POST['cy'];

$cid = file_get_contents('../../key');
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,"https://map.yahooapis.jp/weather/V1/place?appid=".$cid."&coordinates=".$y.",".$x."&output=json");
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
$res = curl_exec($ch);
curl_close($ch);
header('Content-Type: application/json');
echo($res);
?>