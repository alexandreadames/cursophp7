<?php

$condition = true;

while ($condition){
	
	$numero = rand(1,10);
	
	if ($numero == 3){
		echo "TRÊS!!!";
		break;
	}
	else{
		echo $numero;
	}
	
	
}

?>