<?php

$hosting1 = "ashgotpick";
$hosting = "https://akatsuki-php-y2c1.onrender.com";

$directorio = "/home/$hosting1/www/bot/";
$archivos = scandir($directorio); // obtiene un arreglo con los nombres de todos los archivos en el directorio

foreach ($archivos as $archivo) {
if (strpos($archivo, 'cookie') !== false) {
unlink($directorio . '/' . $archivo); // elimina el archivo si contiene la cadena 'hola'
}
}
