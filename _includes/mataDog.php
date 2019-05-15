<?php
//session_start();




if(!isset($_SESSION["cachorro"])){
?>
<a href="index.php?var_pagina=adotaDog">Crie um cachorro</a>
<?php

}else{
    session_destroy();
    echo(";___;");    
}
?>