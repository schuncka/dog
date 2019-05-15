<?php
session_start();
if (isset($_SESSION["cachorro"])){echo("tem cachorro");}
echo("<pre>")  ;
print_r($_SESSION["cachorro"]);
echo("</pre>")  ;
header("Refresh: 10; URL=index.html");

?>