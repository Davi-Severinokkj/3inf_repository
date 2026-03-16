<?php

echo "\n-----------------\n";
echo "CONSULTA DE CONTA";
echo "\n-----------------\n";

echo "Digite seu nome completo: ";
$nomeCliente = readline();

$saldo = 10000;

while(true){

    echo "\n---------------------------\n";
    echo "Nome: $nomeCliente\n";
    echo "Saldo: R$ $saldo\n";
    echo "---------------------------\n";

    echo "Escolha uma das opções:\n";
    echo "1 - Fazer transferência\n";
    echo "2 - Realizar depósito\n";
    echo "3 - Sair\n";

    $opcao = readline();

    if($opcao == 1){
        echo "Digite o valor da transferência: ";
        $valor = readline();
        $saldo = $saldo - $valor;

    } elseif($opcao == 2){
        echo "Digite o valor do depósito: ";
        $valor = readline();
        $saldo = $saldo + $valor;

    } elseif($opcao == 3){
        echo "Você saiu da CONSULTA DE CONTA.\n";
        break;

    } else {
        echo "Opção inválida!\n";
    }
}

?>