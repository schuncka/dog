<?php
/*session_start();
spl_autoload_register(function ($class_name) {
	try {
    	require_once 'class/'.$class_name.'.php';
    }
    catch (Exception $e) {
    	print $e->getMessage();
    }
});*/



if(!isset($_SESSION["cachorro"])){
?>
<a href="index.php?var_pagina=adotaDog">Crie um cachorro</a>
<?php

}else{




$objDog = unserialize($_SESSION["cachorro"]);

$objDog->passear();

}
?>