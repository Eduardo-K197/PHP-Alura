<?php

for ($i = 1; $i <= 15; $i++){
    if ($i == 13) {
        continue; // pula o lupe de acordo com o if.
        //break; sai do lupe antes da condição ser executada.
    }

    echo "$i <br>";
}