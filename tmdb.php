<?php
$v = $_GET["v"];

$url = "https://tmdb.api";

$cek = file_get_contents($url);

$json = json_decode($cek, true);

$curl = curl_init();

echo $json;

?>