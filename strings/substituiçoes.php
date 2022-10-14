<?php
$texto = "o filha da puta terrorista desgraçado";
echo str_replace(['puta', 'desgraçado'], '***', $texto . "<br>");

echo strtr($texto, 'poxa', '***@'). "<br>";
echo strtr($texto, ['poxa' => 'p', 'caranba' => 'c']). "<br>";
