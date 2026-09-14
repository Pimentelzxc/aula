<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">

    <title>AULA LUCAS LUZ</title>
</head>

<body>

    <?php

        $nome = "Pimentel";
        $idade = 20;

        echo "<div class='container'>";

        echo "<h1>Informações do Aluno</h1>";

        echo "<p><strong>Nome:</strong> " . $nome . "</p>";

        echo "<p><strong>Idade:</strong> " . $idade . " anos</p>";

        if ($idade >= 18) {

            echo "<p class='maior'>Você é maior de idade.</p>";

        } else {

            echo "<p class='menor'>Você é menor de idade.</p>";

        }

        echo "</div>";

    ?>

</body>

</html>