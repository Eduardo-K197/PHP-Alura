<?php

$arquivoCarros = fopen('carros-php.txt','r');

stream_filter_append($arquivoCarros, 'string.toupper');

echo fread($arquivoCarros, filesize('carros-php.txt'));