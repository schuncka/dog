<?php

function imprimeDados($prDog) {
	print ("Nome: "  .$prDog->getNome() ." <br/>");
	print ("Idade: " .$prDog->getIdade(). "<br/>");
	print ("Raça: "  . $prDog->getRaca() . "<br/>");
}


if(!isset($_SESSION["cachorro"])){
?>
<a href="index.php?var_pagina=adotaDog">Crie um cachorro</a>
<?php

}else{




$objDog = unserialize($_SESSION["cachorro"]);


imprimeDados($objDog);

}
?>