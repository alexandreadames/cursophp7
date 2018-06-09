<?php 

$link = "http://luluzinhababykids.com/wp-content/uploads/2018/06/LOGO_FUNDO-TRANSPARENTE.png";

$content = file_get_contents($link);

$parse = parse_url($link);

$basename = basename($parse['path']);

$file = fopen($basename, "w+");

fwrite($file, $content);

fclose($file);

 ?>


 <img src="<?=$basename?>">