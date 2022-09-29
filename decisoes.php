<?php

$idade = 16;
$numeroDePessoas = 2;

echo "Você só pode entar se tiver mais de 18 anos." . PHP_EOL;

if ($idade >= 18)
    echo "Você tem $idade anos. pode entrar.";
elseif ($numeroDePessoas >= 2 and $idade >= 16)
    echo "Você tem $idade anos, mas está acompanhado pode entrar.";
else
    echo "Você tem $idade anos. você não pode entar.";