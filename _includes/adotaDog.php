<html>
    <head>
        <title>Cadastro Dog</title>
    </head>

    <body>
        <form name="frmIns" id="frmIns" action="./_includes/nasceDog.php" method="post">
            <div id="dv_nome">
                <label for="nome">Nome da fera:</label><br>
                <input type="text" id="nome" name="nome" value="Ozzy Ousborne"><br><br>
                <label for="idade">Idade da fera:</label><br>
                <input type="text" id="idade" name="idade" value="4"><br><br>
                <label for="raca">Raça da fera:</label><br>
                <input type="text" id="raca" name="raca" value="A melhor de todas"><br><br>
                <input type="submit" value="Enviar">
            </div>
        </form>
    </body>

</html>