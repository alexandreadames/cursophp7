<?php

echo "AULA POO";

echo "<br><br>";

echo "<br>==Exemplo 01 POO==<br>";
echo "<hr>";

class Pessoa {

	public $nome;

	public function falar(){

		return "Meu nome é ". $this->nome;
	}


}

$alexandre = new Pessoa();

$alexandre->nome = "Alexandre Ádames";

echo $alexandre->falar();

echo "<br><br>";
echo "<br>==Exemplo 02 POO==<br>";
echo "<hr>";


class Carro {

	private $modelo;
	private $motor;
	private $ano;

	public function getModelo()	{
		
		return $this->modelo;	
	}

	public function setModelo($modelo) {
		
		$this->modelo = $modelo;

	}

	public function getMotor()	{
		
		return $this->motor;	
	}

	public function setMotor($motor) {
		
		$this->motor = $motor;

	}

	public function getAno():int {
		
		return $this->ano;	
	}

	public function setAno($ano) {
		
		$this->ano = $ano;

	}

	public function exibirInfo(){
		return array(
			'modelo'=>$this->getModelo(),
			'motor'=>$this->getMotor(),
			'ano'=>$this->getAno()
		);
	}

}


$agile = new Carro();

$agile->setModelo("Agile LTZ");
$agile->setMotor("1.4 EconoFlex");
$agile->setAno("2011");

print_r($agile->exibirInfo());

var_dump($agile->exibirInfo());


echo "<br><br>";
echo "<br>==Exemplo 03 POO==<br>";
echo "<hr>";



class Documento {

	private $numero;

	public function getNumero(){
		return $this->numero;
	}

	public function setNumero($numero){
		$valido = Documento::validarCPF($numero);
		if (!$valido){
			throw new Exception("CPF informado não é válido", 1);	
		}
		
		$this->numero = $numero;
	}

	public static function validarCPF($cpf){
	if(empty($cpf)) {
        return false;
    }
 
    $cpf = preg_match('/[0-9]/', $cpf)?$cpf:0;

    $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);
     
    
    if (strlen($cpf) != 11) {
        echo "length";
        return false;
    }
    
    else if ($cpf == '00000000000' || 
        $cpf == '11111111111' || 
        $cpf == '22222222222' || 
        $cpf == '33333333333' || 
        $cpf == '44444444444' || 
        $cpf == '55555555555' || 
        $cpf == '66666666666' || 
        $cpf == '77777777777' || 
        $cpf == '88888888888' || 
        $cpf == '99999999999') {
        return false;

     } else {   
         
        for ($t = 9; $t < 11; $t++) {
             
            for ($d = 0, $c = 0; $c < $t; $c++) {
                $d += $cpf{$c} * (($t + 1) - $c);
            }
            $d = ((10 * $d) % 11) % 10;
            if ($cpf{$c} != $d) {
                return false;
            }
        }
 
        return true;
    }
	}
}

$cpf = new Documento();

$cpf->setNumero("04983863419");
//$cpf->setNumero("049838639897");

var_dump($cpf->getNumero());

var_dump(Documento::validarCPF("0970879698686"));


echo "<br><br>";
echo "<br>==Exemplo 04 POO==<br>";
echo "<hr>";

class Endereco {

	private $logradouro;
	private $numero;
	private $cidade;

	public function __construct($a, $b, $c){
		$this->logradouro = $a;
		$this->numero = $b;
		$this->cidade = $c;
	}

	public function __destruct(){

	}

	public function __toString(){
		return $this->logradouro . "," . $this->numero . "," . $this->cidade; 
	}
}

$meuEndereco = new Endereco("Av. Brigadeiro Salema",714,"Mossoró");

var_dump($meuEndereco);

echo $meuEndereco;

echo "<br><br>";
echo "<br>==Exemplo 05 POO==<br>";
echo "<hr>";

class Pessoa01 {

	public $nome = "Rasmus Lerdorf";
	protected $idade = 48;
	private $senha = "123456";

	public function verDados(){

		echo $this->nome . "<br/>";
		echo $this->idade . "<br/>";
		echo $this->senha . "<br/>";
	}
}

//$rasmus = new Pessoa01();

//echo $rasmus->nome . "<br/>";

//$rasmus->verDados();

class Programador extends Pessoa01 {



}

$alexandre = new Programador();

$alexandre->verDados();

echo "<br><br>";
echo "<br>==Exemplo 06 POO==<br>";
echo "<hr>";

class DocumentoGeral {

	private $numero;

	public function getNumero(){
		return $this->numero;
	}

	public function setNumero($n){
		$this->numero = $n;
	}
}

class CPF extends DocumentoGeral {

	public function validar():bool {
		return true;
	}

}

$doc = new CPF();

$doc->setNumero("04983863419");

var_dump($doc->validar());

echo "<br/>";

var_dump($cpf->getNumero());


echo "<br><br>";
echo "<br>==Exemplo 07 POO==<br>";
echo "<hr>";

interface Veiculo {

	public function acelerar($velocidade);
	public function frenar($velocidade);
	public function trocarMarcha($marcha);
}

class Civic implements Veiculo {

	public function acelerar($v){
		echo "O veículo acelerou até ". $v . "km/h";	
	}

	public function frenar($v){
		echo "O veículo frenou até " . $v . "km/h";	
	}

	public function trocarMarcha($v){
		echo "O veículo trocou de marcha até ". $v . "km/h";	
	}


}


$carro = new Civic();

$carro->acelerar(100);


echo "<br><br>";
echo "<br>==Exemplo 08 POO==<br>";
echo "<hr>";

abstract class Automovel implements Veiculo {

	public function acelerar($v){
		echo "O veículo acelerou até ". $v . "km/h";	
	}

	public function frenar($v){
		echo "O veículo frenou até " . $v . "km/h";	
	}

	public function trocarMarcha($v){
		echo "O veículo trocou de marcha até ". $v . "km/h";	
	}


}

class DelRey extends Automovel {

	public function empurrar(){

	}

}

$carro = new DelRey();

$carro->acelerar(200);


echo "<br><br>";
echo "<br>==Exemplo 09 POO==<br>";
echo "<hr>";

abstract class Animal {

	public function falar(){

		return "Som";

	}

	public function mover(){

		return "Anda";

	} 

}

class Cachorro extends Animal {


	public function falar(){

		return "Late";

	}


}

class Gato extends Animal {


	public function falar(){

		return "Mia";

	}


}

class Passaro extends Animal {


	public function falar(){

		return "Canta";

	}

	public function mover(){

		return "Voa e " . parent::mover();
	}


}


$pluto = new Cachorro();

echo($pluto->falar());

echo "<br/>";

echo ($pluto->mover());

echo "<br/>----------------------------<br/>";

$garfield = new Gato();

echo($garfield->falar());

echo "<br/>";

echo ($garfield->mover());

echo "<br/>----------------------------<br/>";

$golinha = new Passaro();

echo($golinha->falar());

echo "<br/>";

echo ($golinha->mover());
?>



