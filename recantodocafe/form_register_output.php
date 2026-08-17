<?php

session_start();

$nome = $_POST['nome'];

$senha = $_POST['password'];

$email = $_POST['email'];

$telefone = $_POST['telefone'];

$nome = $senha = $email = $telefone = "";
$nome_err = $senha_err = $email_err = $telefone_err = "";

if (empty($nome)) {
    $nome_err = "Por favor digite o nome";
} else{
    $nome = validar_entrada($_POST["nome"]);

    if(!preg_match("/^[a-zA-Z]*$/",$nome)){
        $name_err = "Permitido a entrada apenas de letras e espaços em brancos.";
    }
}  if(empty($senha)){
    $senha_err = "Por favor digite a senha";
} else{
    $senha = validar_entrada($_POST["senha"]);
    if(!preg_match("/^[a-zA-Z0-9]*$/",$senha)){
        $senha_err = "Padrão de senha incorreto.";
    }
}  if(empty($email)){
    $email_err = "Por favor digite o seu email.";
}

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