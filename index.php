<!DOCTYPE *html*>

<html *lang*="pt-br">

<head>

 <meta *charset*="UTF-8">

<meta *name*="viewport" *content*="width=device-width, initial-scale=1.0">

<title>AULA LUCAS LUZ\</title>

</head>

<body>

 <?php
 $nome = "Pimentel";
 $idade = 20;

 echo "\<h1>nome: <?=$nome?>\</h1>";

 echo "\<p>idade: <?=$idade?>\</p>";

 if ($idade >= 18) {
     echo "\<p>Você é maior de idade.\</p>";
 } else {
     echo "\<p>Você é menor de idade.\</p>";
 }

?>

</body>

</html>