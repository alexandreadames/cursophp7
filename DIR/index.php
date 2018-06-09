<?php 


$dirname = "images";

/*
if (!is_dir($dirname)){
	mkdir($dirname);
	echo "Diretório: $dirname criado com sucesso!";	
}
else{
	rmdir($dirname);
	echo "Já existe o diretório: $dirname foi removido!";
}*/

$images = scandir("images");

$data = array();

foreach ($images as $img) {
	if (!in_array($img, array(".",".."))){

		$filename = "images".DIRECTORY_SEPARATOR.$img;

		$info = pathinfo($filename);

		$info["size"] = filesize($filename);

		$info["size"] = date("d/M/Y H:i:s", filemtime($filename));

		$info["url"] = "http://localhost/cursophp7/DIR/".str_replace("\\","/",$filename);

		array_push($data, $info);

	}
}

echo json_encode($data);



 ?>