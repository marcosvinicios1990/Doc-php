<?php
    $nome = "Marcos";
    $idade = 15;
    $casado = true;

    if ($casado) {
        $msg = "Casado";
    } else {
        $msg = "Solteiro";
    }

    if ($idade < 18 ){
        $deMaior = "Menor";
    } else {
        $deMaior = "Maior";
    }

    $lista = ["pao", "leite", "suco", "bolacha"];
    $lista[] = "sabao";
    
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste</title>
    <style>
        p{
            font-size:18px 
        }
    </style>
</head>
<body>
    
    <h1><b>Primeira aula de PHP</b></h1>

    <h1>
        <?php echo $nome; ?>
    </h1>

    <p>
        Tenho <?php echo $idade ?> anos e sou <?php echo $msg ?>!
    </p>
    <p>
        Sou <?php echo $deMaior ?> de idade!
    </p>

    <p> <H1>Lista de compras:</H1>
        
   <?php for ($i=0;$i < count($lista); $i++) {
        echo $lista[$i]."<br>";
        }
    ?>

    </p>

    
</body>
</html>