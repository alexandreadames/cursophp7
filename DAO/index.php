<?php 

require_once("config.php");

/*
$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);
*/



$user = new Usuario();

$user->loadById(4);

echo $user;


/*
$result = Usuario::getList();

echo json_encode($result);
*/

/*
$search = Usuario::search('fe');

echo json_encode($search);
*/

/*
$user = new Usuario();

$user->getByIdLogin(2,'nichollas');

echo $user;
*/

/*
$user = new Usuario();

$user->login('felipe','233a48ff0c2c33eda0e1e2949353c84b');

echo $user;
*/



 ?>