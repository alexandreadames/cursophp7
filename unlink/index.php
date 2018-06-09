<?php 


/*
$file = fopen("teste.txt","w+");

fclose($file);

unlink("teste.txt");


echo "Arquivo removido com sucesso!";
*/

if (!is_dir("logs")) mkdir("logs");

foreach (scandir("logs") as $item) {
	
	if (!in_array($item,array(".",".."))){

		unlink("logs/".$item);
	}

}


 ?>