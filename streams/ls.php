<?php

$diretorioAtaual = dir('.');

while ($arquivo = $diretorioAtaual->read()){
	echo $arquivo . PHP_EOL;
}