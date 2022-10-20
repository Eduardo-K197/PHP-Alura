<?php

class MeuFiltro extends php_user_filter
{
	public function onCreate()
	{
		parent::onCreate(); // TODO: Change the autogenerated stub
	}
	
	public function filter($in, $out, &$consumed, bool $closing)
	{
		while ($bucket = stream_bucket_make_writeable($in)){
			$linhas = explode("\n", $bucket->data);
			$saida = "";
			
			foreach ($linhas as $linha){
				if (stripos($linha, '2022') !== false){
					$saida .= "$linha \n";
				}
			}
		}
	}
}