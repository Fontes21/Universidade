<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="assets/css/estilo.css" rel="stylesheet">
</head>
<body>
 
    <h1>Cadastre um novo curso</h1>
 
    <form method="POST">
 
        <label>Nome:</label>
        <input type="text" name="nome" minlength="3" required><br><br>
 
        <label>nível:</label>
        <input type="text" name="nivel" minlength="3" required><br><br>
 
        <label>duração:</label>
        <input type="text" name="duracao" minlength="3" required><br><br>
 
        <label>valor total:</label>
        <input type="text" name="valortotal" minlength="3" required><br><br>
 
        <label>descrição:</label>
        <input type="text" name="descricao" minlength="3" required><br><br>
 
        <input type="submit" name="cadastrar" value="Cadastrar">
 
        <?php
 
            if ( isset($_REQUEST["cadastrar"]) ) 
            {
                include_once('./class/curso.php');
               
                $p = new curso();
                $p->create($_REQUEST["nome"], $_REQUEST["nivel"], $_REQUEST["duracao"], $_REQUEST["valortotal"], $_REQUEST["descricao"]); 

                echo $p->cadastro() == true ?
                        "<p>cadastro feito</p>" :
                        "<p>Ocorreu um erro.</p>";
            }
        ?>
 
    </form>
    
</body>
</html>