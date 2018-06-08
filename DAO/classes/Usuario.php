<?php 

class Usuario {

	private $idusuario;
	private $login;
	private $senha;
	private $dtcadastro;

	public function getIdUsuario(){
		return $this->idusuario;
	}

	public function setIdUsuario($id){
		$this->idusuario = $id;
	}

	public function getLogin(){
		return $this->login;
	}

	public function setLogin($login){
		$this->login = $login;
	}

	public function getSenha(){
		return $this->senha;
	}

	public function setSenha($senha){
		$this->senha = md5($senha);
	}

	public function getDtCadastro(){
		return $this->dtcadastro;
	}

	public function setDtCadastro($dtcadastro){
		$this->dtcadastro = $dtcadastro;
	}

	public function loadById($id){

		$sql = new Sql();

		$results = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = :ID",array(
			":ID" => $id
		));

		if (isset($results[0])){
			$row = $results[0];

			$this->setIdUsuario($row['idusuario']);
			$this->setLogin($row['login']);
			$this->setSenha($row['senha']);
			$this->setDtCadastro(new DateTime($row['dtcadastro']));
		}

	}

	public function __toString(){

		return json_encode(array(
			"idusuario" => $this->getIdUsuario(),
			"login" => $this->getLogin(),
			"senha" => $this->getSenha(),
			"dtcadastro" => $this->getDtCadastro()->format("d/m/Y H:i:s")
		));
	}

}

 ?>