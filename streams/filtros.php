<?php

require "MeuFiltro.php";

$arquivoCarros = fopen('carros-php.txt','r');

stream_filter_register('carros.partes', MeuFiltro::class);

stream_filter_append($arquivoCarros, 'carros.partes');

echo fread($arquivoCarros, filesize('carros-php.txt'));