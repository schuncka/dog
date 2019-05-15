<?php
session_start();
//echo "usuario: ". $_POST['usuario'] . "    senha: ".$_POST['pass'];
$strPagina="";
if (isset($_GET['var_pagina'])) {
    $strPagina = $_GET["var_pagina"];
}
spl_autoload_register(function ($class_name) {
	try {
    	require_once '_class/'.$class_name.'.php';
    }
    catch (Exception $e) {
    	print $e->getMessage();
    }
});

?>



<html>
    <head>
        <title>Revis&atilde;o</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/revisao.css"/>
    </head>
    <body>
        <header>
            <span class="nome">Adote um Dog</span>
            <nav>
                        <a href="index.php?var_pagina=adotaDog">Adotar um cachorro</a>
                        <a href="index.php?var_pagina=exibeDog">Qual o meu cachorro?</a>
                        <a href="index.php?var_pagina=passearDog">Passear com o cachorro</a>
                        <a href="index.php?var_pagina=mataDog">Sofrer com a morte do cachorro</a>                
            </nav>
        </header>
        <main>
 
            <section class='ativa' id="login">                
                    <?php 
                        if ($strPagina != ""){
                            require_once("./_includes/".$strPagina.".php");
                        }else{
                    ?>
                            <div style="width:100%;height:0;padding-bottom:51%;position:relative;"><iframe src="https://giphy.com/embed/VzLR6oO6MzybC" width="100%" height="100%" style="position:absolute" frameBorder="0" class="giphy-embed" allowFullScreen></iframe></div><p><a href="https://giphy.com/gifs/funny-VzLR6oO6MzybC">via GIPHY</a></p>    
                    <?php  } ?>
            </section>
            <aside>
            <div style="width:100%;height:0;padding-bottom:78%;position:relative;"><iframe src="https://giphy.com/embed/aUms4Tfd5e6Tm" width="100%" height="100%" style="position:absolute" frameBorder="0" class="giphy-embed" allowFullScreen></iframe></div><p><a href="https://giphy.com/gifs/dog-funny-animals-aUms4Tfd5e6Tm">via GIPHY</a></p>
            </aside>
        </main>
        <footer>
            &COPY; Gabriel Schunck
        </footer>
        <script type="text/javascript">
            function mudaSecao(link, idSecao) {
                document.getElementsByClassName('selecionado')[0].className = '';
                link.className = 'selecionado';
                document.getElementsByClassName('ativa')[0].className = '';
                document.getElementById(idSecao).className = 'ativa';
            }
        </script>
    </body>
</html>
