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

        if ($idade >= 18) {

         "<p class='maior'> Você é maior de idade.</p>";

        } else {

            "<p class='menor'>Você é menor de idade.</p>";

        }


    ?>
         "<div class='container'>";

         "<h1>Informações do Aluno</h1>";

         "<p><>Nome:  <?= $nome ?> </p>";

         "<p>Idade: <?= $idade ?> anos</p>";
         "</div>";

</body>

</html>