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

        $resultado ="";
        if ($idade >=18)
            {
                $resultado = "maior de idade";
            }

             else if($idade <= 0)
            {
                $invalido = "";
            }

            else {
                $resultado =" menor de idade";
            }

           

    ?>
         <div class='container'>

         <h1>Informações do Aluno</h1>

         <form action="POST" method="GET">

             <input type="number" id="idade" name="idade" required>

             <button type="submit">Verificar</button>

         </form>


         <p> <strong> voce é</strong> <?= $resultado ?></p>
         <p> <strong> idade invalida</strong> <?= $invalido ?></p>

         </div>

         

</body>

</html>