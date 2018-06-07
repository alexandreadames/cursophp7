<?php

$conn = new mysqli("localhost","root","", "cursophp7");

if ($conn->connect_error){
	echo "Error:".$conn->connect_error;
}

/*$stmt = $conn->prepare("INSERT INTO tb_usuarios (login, senha) values (?,?)");

$login = "nichollas";
$pass = md5("reino2");

$stmt->bind_param("ss",$login,$pass);

$stmt->execute();

$login = "fernanda";
$pass = md5("deusefiel");

$stmt->execute();

*/

$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY login");

$data = array();

while($row = $result->fetch_assoc()){

	array_push($data, $row);
	

}

echo json_encode($data);


//echo "USUÁRIO INSERIDO COM SUCESSO!!!";

?>