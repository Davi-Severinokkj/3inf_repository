<?php
$nameUser = $_REQUEST["nome"];
$register = $_REQUEST["regAluno"];
$email = $_REQUEST["email"];
$telefone = $_REQUEST["telefone"];

// Criar conexão

try {
    $con = new mysqli("localhost", "root", "", "aulaphp");
    $con->set_charset("utf8mb4");

    $sql1 = "INSERT INTO cadastro_alunos(regAluno, nome, email, telefone) VALUES ('$register', '$nameUser', '$email', '$telefone')";
    $con->query($sql1);
} catch (mysqli_sql_exception $e) {
    echo "Erro ao inserir no banco de dados." . $e -> getMessage();
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulário PHP</title>
    <style>
        body{
            font-size: 20pt;
            color: white;
            font-family: "Arial Black";
            background: #0b4f68;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        input{
            color: black;
            border-radius: 30px;
            text-align: center;
        }
        button{
            cursor: pointer;
            color: white;
            background-color: #56a21c;
            padding: 10px;
            border: none;
        }
        button:hover{
            transform: scale(1.03);
            transition: 0.2s;
        }
    </style>
</head>
<body>
    <div class="mensage">
        <h3>
            Parabéns <strong><?php echo $nameUser?>!</strong> Você foi cadastrado com sucesso! <br>
            Seu ID Aluno é <?php echo $register?>. <br>
            Seu nome é <?php echo $nameUser?>. <br>
            Seu e-mail <?php echo $email?>. <br>
            Seu telefone <?php echo $telefone?>. <br>
        </h3>
    </div>
</body>
</html>