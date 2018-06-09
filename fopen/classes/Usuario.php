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
		$this->senha = $senha;
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

	public static function getList(){

		$sql = new Sql();

		return $sql->select("SELECT * FROM tb_usuarios ORDER BY login");

	}

	public static function search($login){

		$sql = new Sql();

		return $sql->select("SELECT * FROM tb_usuarios WHERE login LIKE :SEARCH", array(
			':SEARCH'=> '%'.$login.'%'
		));		
	}

	public function login($login, $senha){

		$sql = new Sql();

		$results = $sql->select("SELECT * FROM tb_usuarios WHERE login = :LOGIN and senha = :SENHA", array(
			':LOGIN' => $login,
			':SENHA' => $senha
		));


		if (isset($results[0])){
			$row = $results[0];

			$this->setIdUsuario($row['idusuario']);
			$this->setLogin($row['login']);
			$this->setSenha($row['senha']);
			$this->setDtCadastro(new DateTime($row['dtcadastro']));
		}

		else{
			throw new Exception("Login ou senha inválidos.");
			
		}		

	}

	public function getByIdLogin($id, $login){

		$sql = new Sql();

		$results = $sql->select("SELECT * FROM tb_usuarios WHERE login = :LOGIN and idusuario = :ID;", array(
			':LOGIN' => $login,
			':ID' => $id
		));


		if (isset($results[0])){
			$row = $results[0];

			$this->setIdUsuario($row['idusuario']);
			$this->setLogin($row['login']);
			$this->setSenha($row['senha']);
			$this->setDtCadastro(new DateTime($row['dtcadastro']));
		}

		else{
			throw new Exception("Login ou senha inválidos.");
			
		}		

	}

	public function update($login, $senha){

		$this->setLogin($login);
		$this->setSenha($senha);

		$sql = new Sql();

		$sql->query("UPDATE tb_usuarios set login = :LOGIN, senha=:SENHA WHERE idusuario=:ID", array(
			':LOGIN'=> $this->getLogin(),
			':SENHA'=> $this->getSenha(),
			':ID' => $this->getIdUsuario()
		));

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