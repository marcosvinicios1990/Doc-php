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


?>