<?php

$estudante = true;

if ($estudante) {}

$nome = "Davi Severino Oliveira de Souza";
$idade = 17;
$altura = 1.83;

$cores = ['azul', 'verde', 'amarelo', 'vermelho'];

echo "Nome: " . $nome . "<br>";
echo "Idade: " . $idade . "<br>";
echo "Altura: " . $altura . "<br>";
echo "Cores favoritas: " . $cores[0] . ", " . $cores[1] . ", " . $cores[2] . ", " . $cores[3] . "<br>";


//foreach ($cores as $cor) {
//    echo "Minhas cores favoritas são: " . $cor . "<br>";
//}

?>

<style>
    body:hover{
        background-color: #470315;
        color: brown;
    }
    body{
        display: flex;
        justify-content: center;
        align-items: center;
        color: #ffffff;
        background-color: #48d57a;
        font-family: cursive;
        font-size: 20pt;
        text-align: center;
    }
</style>

