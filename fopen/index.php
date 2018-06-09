<?php 

require_once("config.php");

echo "AULA FOPEN";

echo "<br><br>";

echo "<br>==Exemplo 01 FOPEN==<br>";
echo "<hr>";

/*
$file = fopen("log.txt","a+");

fwrite($file, date("Y-m-d H:i:s")."-"."File created!\r\n");

echo "log criado!";
*/


echo "<br>==Exemplo 02 FOPEN==<br>";
echo "<hr>";

$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios;");

$headers = array();

foreach ($usuarios[0] as $key => $value) {
	
	array_push($headers, $key);
}

$file = fopen("usuarios.csv","w+");

fwrite($file, implode(",",$headers)."\r\n");

foreach ($usuarios as $row) {

	$data = array();

	foreach ($row as $key => $value) {
			
		array_push($data, $value);	

	}
	
	fwrite($file,implode(",",$data)."\r\n");
}

fclose($file);

?>