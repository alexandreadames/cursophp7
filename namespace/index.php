<?php 


require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Alexandre");
$cad->setEmail("alexandre.adames@gmail.com");
$cad->setSenha("123456");

$cad->registrarVenda();


 ?>