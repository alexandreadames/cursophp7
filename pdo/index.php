<?php 

$conn = new PDO("mysql:dbname=cursophp7;host=localhost","root","");

/*
EXEMPLO PDO CONSULTAS
*/

echo "===========================================<br/>";
echo "EXEMPLO PDO CONSULTAS<br/>";
echo "===========================================<br/>";

$stmt = $conn->prepare("SELECT * from tb_usuarios");

$stmt-> execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

//var_dump($results);

foreach ($results as $row) {
	foreach ($row as $key => $value) {
		echo "<strong> ".$key.":</strong> ".$value." <br/>";

	}

	echo "===========================================<br/>";
}

echo "===========================================<br/>";
echo "EXEMPLO PDO INSERT<br/>";
echo "===========================================<br/>";

/*
$stmt = $conn->prepare("INSERT INTO tb_usuarios (login, senha) VALUES (:LOGIN, :PASSWORD)");

$login = 'felipe';
$password = md5('lulu');

$stmt->bindParam(":LOGIN",$login);
$stmt->bindParam(":PASSWORD",$password);

$stmt->execute();

echo "USUÁRIO INSERIDO COM SUCESSO!";
*/

echo "===========================================<br/>";
echo "EXEMPLO PDO UPDATE<br/>";
echo "===========================================<br/>";


/*
$stmt = $conn->prepare("UPDATE tb_usuarios SET senha = :PASSWORD WHERE idusuario = :ID");

$password = md5('lulubabykids');
$id = 5;

$stmt->bindParam(":PASSWORD",$password);
$stmt->bindParam(":ID",$id);

$stmt->execute();

echo "USUÁRIO ATUALIZADO COM SUCESSO!";
*/

echo "===========================================<br/>";
echo "EXEMPLO PDO DELETE<br/>";
echo "===========================================<br/>";

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");

$id = 3;

$stmt->bindParam(":ID",$id);

$stmt->execute();

echo "USUÁRIO DELETADO COM SUCESSO!";

 ?>