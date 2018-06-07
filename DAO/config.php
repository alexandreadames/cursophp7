<?php 

spl_autoload_register(function($className){

	$filename = "classes" . DIRECTORY_SEPARATOR . $className.".php";

	var_dump($filename);

	if (file_exists($filename)){
		require_once($filename);

	}
})

 ?>