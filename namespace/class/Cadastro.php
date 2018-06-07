<?php 


class Cadastro {

	private $nome;
	private $email;
	private $senha;

	public function getNome():string{
		return $this->nome;
	}

	public function setNome($n){
		$this->nome = $n;
	}

	public function getSenha():string{
		return $this->senha;
	}

	public function setSenha($s){
		$this->senha = $s;
	}

	public function getEmail():string{
		return $this->email;
	}

	public function setEmail($e){
		$this->email = $e;
	}

	public function __toString(){

		return json_encode(array(
			'nome' => $this->nome,
			'email' => $this->email,
			'senha' => $this->senha 

	));

	}


}

 ?>