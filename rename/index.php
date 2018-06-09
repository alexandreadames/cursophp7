<?php 

$dir1 = "folder_01";
$dir2 = "folder_02";

if (!is_dir($dir1)) mkdir($dir1);
if (!is_dir($dir2)) mkdir($dir2);

$filename = "README.txt";

if (!file_exists($dir1 .DIRECTORY_SEPARATOR. $filename)){
	
	$file = fopen($dir1 .DIRECTORY_SEPARATOR. $filename, "w+");
	
	fwrite($file, "Hello World!");
	
	fclose($file);
}

$filename2 = "README_IMPORTANT.txt";

rename($dir2 .DIRECTORY_SEPARATOR. $filename, $dir2 .DIRECTORY_SEPARATOR. $filename2);

 ?>