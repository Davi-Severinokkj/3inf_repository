<?php
$host = "localhost";
$banco = "syslogin";
$usuario = "root";
$senha = "";

$conexao = new mysqli($host, $usuario, $senha, $banco);

if ($conexao->connect_error) {
    die("Erro ao conectar ao banco de dados.");
}

$conexao->set_charset("utf8mb4");
?>
