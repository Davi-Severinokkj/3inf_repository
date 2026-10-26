<?php
session_start();

require_once "conexao.php";

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: esqueceu_senha.php");
    exit;
}

$nome = trim($_POST["nome"] ?? "");
$cpf = trim($_POST["cpf"] ?? "");
$email = trim($_POST["email"] ?? "");

$sql = "SELECT id FROM usuario
        WHERE nome = ? AND cpf = ? AND email = ?";

$stmt = $conexao->prepare($sql);
$stmt->bind_param("sss", $nome, $cpf, $email);
$stmt->execute();

$resultado = $stmt->get_result();



$stmt->close();
$conexao->close();
?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Recuperar Acesso | SysLogin</title>
</head>

<body>

    <main class="container">
        <?php if ($resultado->num_rows === 1):
            $params = $resultado->fetch_assoc();

            $_SESSION['usuario_id'] = $params['id'];
        ?>

            <div class="formulario">

                <h1>Olá, <?= htmlspecialchars($nome); ?></h1>

                <form action="recuperar_senha.php" method="POST">

                    <label for="recuperar_senha">Nova senha</label>

                    <input
                        type="password"
                        name="recuperar_senha"
                        id="recuperar_senha"
                        placeholder="Digite aqui a nova senha"
                        required>

                    <button type="submit">ENVIAR</button>

                </form>

            </div>

        <?php else: ?>

            <div class="formulario">
                <h1>Você não está cadastrado.</h1>
            </div>

            <div class="links">
                <a href="cadastro.php">Cadastrar-se</a>
            </div>

        <?php endif; ?>
    </main>
</body>

</html>