
<?php
require_once "conexao.php";

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: cadastro.php");
    exit;
}

$nome = trim($_POST["nome"] ?? "");
$cpf = trim($_POST["cpf"] ?? "");
$email = trim($_POST["email"] ?? "");
$data = $_POST["data_nascimento"] ?? "";
$senha = $_POST["senha"] ?? "";

if (
    $nome === "" ||
    !preg_match('/^[0-9]{11}$/', $cpf) ||
    !filter_var($email, FILTER_VALIDATE_EMAIL) ||
    $data === "" ||
    strlen($senha) < 8
) {
    exit("Dados inválidos. Confira os campos e tente novamente.");
}

$hash = password_hash($senha, PASSWORD_DEFAULT);

$sql = "INSERT INTO usuario
        (nome, cpf, email, data_nascimento, senha)
        VALUES (?, ?, ?, ?, ?)";

$stmt = $conexao->prepare($sql);
$stmt->bind_param(
    "sssss",
    $nome,
    $cpf,
    $email,
    $data,
    $hash
);

if ($stmt->execute()) {
    echo "Cadastro realizado com sucesso!
          <a href='login.php'>Fazer login</a>";
} else {
    if ($stmt->errno === 1062) {
        echo "CPF ou e-mail já cadastrado.";
    } else {
        echo "Não foi possível realizar o cadastro.";
    }
}

$stmt->close();
$conexao->close();
?>
