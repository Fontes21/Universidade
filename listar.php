<?php
 include_once ("class/curso.php");
 ?>

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

    <h1>Lista de cursos</h1>

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

        <input type="submit" name="listar" value="listar">


    </form>

    <section class="lista">

            <table>
                <tr>
                    <th>Nome</th>
                    <th>nível</th>
                    <th>duração</th>
                    <th>valortotal</th>
                    <th>descricao</th>
                </tr>

            <?php

                $p = new curso(); 
                $lista = $p->listarcurso();

                foreach ($lista as $item) {
                   echo "
                        <tr>
                            <td> " . $item["nome"] . "</td>
                            <td> " . $item["nivel"] . "</td>
                            <td> " . $item["duracao"] . "</td>
                            <td> " . $item["valortotal"] . "</td>
                            <td> " . $item["descricao"] . "</td>
                            <td> <a href='deletar.php?id=" . $item["idcurso"] .  "'>Excluir</a> </td>
                            <td> <a href='editar.php?id=" . $item["idcurso"] .  "'>atualizar</a> </td>
                        </tr>
                   ";
                }

            ?>

            </table>
    </section>
    
</body>
</html>