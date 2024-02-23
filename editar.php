<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<?php
    include_once("./class/curso.php");
        $u = new Curso();
        $u->buscarcurso($_GET["id"]);
 
        echo "
            <form method='POST'>
 
            <label>nome:</label>
            <input type='text' name='nome' value='" . $u->getnome() . "' required><br><br>
 
            <label>nivel:</label>
            <input type='text' name='nivel' value='" . $u->getnivel() . " ' required><br><br>
 
            <label>duracao:</label>
            <input type='text' name='duracao' value='" . $u->getduracao() . "' required><br><br>
 
            <label>valortotal:</label>
            <input type='text' name='valortotal' value='" . $u->getvalortotal() . "' required><br><br>
            
            <label>descricao:</label>
            <input type='text' name='descricao' value='" . $u->getdescricao() . "' required><br><br>
 
            <button type='submit' name='atualizar'>Atualizar</button>
            <button type='button'><a href='listarCurso.php' id='botaoVoltar'>Cancelar</a></button>
        ";
 
        if ( isset($_REQUEST["atualizar"]) )
        {
            $u->create($_REQUEST["nome"], $_REQUEST["nivel"], $_REQUEST["duracao"], $_REQUEST["valortotal"], $_REQUEST["descricao"]);
 
            echo $u->atualizar($_GET["id"]) == true ?
                    "<p class='mensagemSucesso'>Curso editado com sucesso.</p>" . header("Location: listar.php") :
                    "<p class='mensagemErro'>Ocorreu um erro ao editar.</p>";
        }
    ?>