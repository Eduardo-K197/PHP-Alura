<?php

$csv = ",Calos Eduardo,24.,";

echo trim($csv,  ',.') . PHP_EOL;  // trim remove caracteres passado por parametro.
echo ltrim($csv, ',.') . PHP_EOL;
echo rtrim($csv, ',.');