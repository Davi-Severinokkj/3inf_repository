<?php
session_start();

if (!isset($_SESSION['usuario_id'])) {
    header("Location: form_login.php");
    exit;
}

$connect = mysqli_connect(
    'localhost',
    'root',
    'Seemg@1222017',
    'recanto_do_cafe'
);

$connect->set_charset("utf8");

$id = $_SESSION['usuario_id'];

$sql = "SELECT id, nome, email, telefone FROM usuario WHERE id = ?";

$stmt = $connect->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();

$result = $stmt->get_result();

$usuario = $result->fetch_assoc();

include("includes/head.php");

?>

<main>


    <h1>Minha conta</h1>

    <p>
        <strong>Nome:</strong>
        <?= htmlspecialchars($usuario['nome']) ?>
    </p>

    <p>
        <strong>Email:</strong>
        <?= htmlspecialchars($usuario['email']) ?>
    </p>

    <p>
        <strong>Telefone:</strong>
        <?= htmlspecialchars($usuario['telefone']) ?>
    </p>


</main>