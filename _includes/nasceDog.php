<?php
session_start();

spl_autoload_register(function ($class_name) {
	try {
    	require_once '../_class/'.$class_name.'.php';
    }
    catch (Exception $e) {
    	print $e->getMessage();
    }
});


$dog = new dog($_POST["nome"], $_POST["idade"],$_POST["raca"]);


$_SESSION["cachorro"] = serialize($dog);

header("Location: ../index.php");


?>