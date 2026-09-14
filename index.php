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

    echo "<div class='container'>";

    echo "<h1>Olá, seja bem-vindo!</h1>";

    echo "<p>Esta é a aula de Lucas Luz</p>";

    echo "<p>Hoje estamos aprendendo os primeiros conceitos de PHP.</p>";

    echo "<button id='botao'>Começar aula</button>";

    echo "</div>";

?>

<script>
    document.getElementById("botao").addEventListener("click", function() {
        alert("A aula começou!");
    });
</script>

</body>

</html>