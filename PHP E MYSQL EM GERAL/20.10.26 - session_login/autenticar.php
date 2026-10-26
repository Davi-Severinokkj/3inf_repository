<?php
session_start();
require_once "conexao.php";

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: index.php");
    exit;
}

$email = trim($_POST["email"] ?? "");
$senha = $_POST["senha"] ?? "";

$sql = "SELECT id, nome, senha FROM usuario WHERE email = ?";
$stmt = $conexao->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();

$resultado = $stmt->get_result();
$usuario = $resultado->fetch_assoc();

$stmt->close();
$conexao->close();
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Autenticação | SysLogin</title>
</head>

<body>

    <?php

    if ($usuario && password_verify($senha, $usuario["senha"])) {
        session_regenerate_id(true);

        $_SESSION["usuario_id"] = $usuario["id"];
        $_SESSION["usuario_nome"] = $usuario["nome"];

        echo "Olá, "
            . htmlspecialchars($usuario["nome"], ENT_QUOTES, "UTF-8")
            . "!";
    } else {
        echo "E-mail ou senha incorretos.";
    }

    ?>

</body>

</html>