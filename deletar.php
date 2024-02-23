<?php
     include_once("./class/curso.php");
     $p = new curso();
 
     $p->delete($_GET["id"]);
     echo "Curso Excluído !";
?>

<a href="./listar.php">Voltar</a>