<?php

$diferenca = 18 - IDADE;
$idade = readline("Quantos anos você tem? ");

if($idade < 18){
    echo "Você tem " . $idade . " anos" . ", portanto é menor de idade e tem que esperar " , $diferenca , " anos para tirar sua carteira de habilitaçao." . PHP_EOL;
} else if ($idade <= 18){
    echo "Você tem " . $idade . " anos" . ", portanto é maior de idade e pode tirar sua carteira de habilitação!" . PHP_EOL; ;
}
//
//echo "-----------------------";
//echo "Contagem progressiva de 0 a 100";
//echo "-----------------------" . PHP_EOL;
//
//for($i = 0; $i < 100; $i = $i + 3){
//
//    echo "Número: " , $i . PHP_EOL;
//}
//
//echo "-----------------------";
//echo "Contagem regressiva de 100 a 0";
//echo "-----------------------" . PHP_EOL;
//
//for($number = 100; $number > 0; $number = $number - 3){
//    echo "Número: " , $number . PHP_EOL;
//}
//

?>

