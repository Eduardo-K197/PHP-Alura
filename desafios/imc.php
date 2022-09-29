<?php

//Menos do que 18,5	Abaixo do peso
//Entre 18,5 e 24,9	Peso normal
//Entre 25 e 29,9	Sobrepeso
//IMC = Peso ÷ (Altura × Altura)

function imc($altura, $peso): void
{

    $imc = $peso / $altura ** 2;
    echo "Seu IMC é de $imc. Você esta com o IMC ";

    if ($imc < 18.5)
        echo " abaixo";
    elseif ($imc < 25)
        echo " dentro";
    else
        echo " acima";
    echo " do recomendado";
}

imc(1.76, 56);