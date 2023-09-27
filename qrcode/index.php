<?php

// Incluir composer
include_once('./vendor/autoload.php');

// Link dados Charles
$url = 'https://leonardokzkz.github.io/HealthGuardian/';

// Imprimir o titulo

echo "<h2> Gerar QRCode da URL: $url</h2>";

$qrcode = (new \chillerlan\QRCode\QRCode())->render($url);

echo "<img src= '$qrcode'>";