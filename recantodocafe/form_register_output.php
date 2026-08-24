<?php

session_start();

$nome = $_POST['nome'];

$senha = $_POST['password'];

$email = $_POST['email'];

$telefone = $_POST['telefone'];

$senha = password_hash(
        $senha,
        PASSWORD_DEFAULT
);

$connect = new mysqli(
        "localhost",
        "root",
        "Seemg@1222017",
        "recanto_do_cafe"
);

$connect->set_charset("utf8");



$sql = "INSERT INTO usuario
        (nome, senha, email, telefone)
        VALUES (?, ?, ?, ?)";


$stmt = $connect->prepare($sql);



$stmt->bind_param(
        "ssss",
        $nome,
        $senha,
        $email,
        $telefone
);



$stmt->execute();



$id = $connect->insert_id;



$_SESSION['usuario_id'] = $id;



$_SESSION['nome'] = $nome;



header("Location: my_account.php");

exit;
?>