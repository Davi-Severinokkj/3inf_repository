<?php
session_start();

if (!isset($_SESSION['usuario_id'])) {
    header("Location: index.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: index.php");
    exit;
}

$resultado = false;

$recuperar_senha = $_POST['recuperar_senha'] ?? '';

if (trim($recuperar_senha) === '') {
    exit("Digite uma nova senha.");
}


$recuperar_senha = $_POST['recuperar_senha'];

$senha_hash = password_hash($recuperar_senha, PASSWORD_DEFAULT);

try {
    $conexao = new mysqli(
        "localhost",
        "root",
        "",
        "syslogin"
    );

    $conexao->set_charset("utf8mb4");

    $sql = "UPDATE usuario SET senha = ? WHERE id = ?";
    
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param(
        "si",
        $senha_hash,
        $_SESSION['usuario_id']
    );

    $stmt->execute();

    $resultado = $stmt -> affected_rows;

    $stmt->close();
    $conexao->close();
} catch (Exception $e) {
    echo "Falha -> " . $e->getMessage();
}









?>





<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>SUCESSO!</title>
</head>

<body>



    <main class="container">
        <?php
        if ($resultado > 0):
        ?>

            <div class="formulario">

                <h1>Senha alterada com sucesso!</h1>

                <script>
                    setTimeout(() => {
                        window.location.href = "login.php",
                            2000
                    });
                </script>

            </div>

        <?php endif; ?>
        </form>
    </main>

</body>

</html>