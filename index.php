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
        $resultado ="";
        if ($idade >=18)
            {
                $resultado = "maior de idade";

        
            }
            else {
              
            $resultado =" menor de idade";
            }


        

    


    ?>
         <div class='container'>

         <h1>Informações do Aluno</h1>

         <p> <strong>Nome:</strong> <?= $nome ?> </p>

         <p> <strong>Idade:</strong> <?= $idade ?> anos</p>

         <p> <strong> voce é</strong> <?= $resultado ?></p>

    

         </div>

         

</body>

</html>