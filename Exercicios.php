<?php

for ($i=0;$i <51;$i++){
    echo $i. "<br>";
}

echo "acabou o primeiro <br>";

for ($i = 50; $i >=0; $i--) {
    echo $i. "<br>";
}

$data = array(100,404,500,200);

 foreach ($data as $x => $y) {
     echo "o número da posição $x é $y <br>";
 }

$array =[["nome" => "João da Silva","medalha" => "Prata"],
         ["nome" => "Wagner Albuquerque","medalha" => "Bronze"],
         ["nome" => "Henrique Oliveira","medalha" => "Ouro"]];
foreach ($array as $x) 
{
    echo  "O medalista ". $x["nome"] ." ganhou medalha de ". $x["medalha"] ."<br>";
}

$lista = ["pao", "leite", "suco", "bolacha"];
    $lista[] = "sabao";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciando PHP</title>
    <style>
        p{
            font-size:18px 
        }
    </style>
</head>
<body>
    
    <h1><b> aula de PHP</b></h1>


    <p> <H1>Lista de compras:</H1>
        
   <?php for ($i=0;$i < count($lista); $i++) {
        echo $lista[$i]."<br>";
        }
    ?>

    </p>

    
</body>
</html>