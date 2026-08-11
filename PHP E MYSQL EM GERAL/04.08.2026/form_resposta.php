<?php

    $nome = $_REQUEST['nome'];
    $email = $_REQUEST['email'];
    $telefone = $_REQUEST['telefone'];
    $cpf = $_REQUEST['cpf'];
//    daviseverino31@gmail.com.br.gov.mg.aluno
    $valNome = "/^[a-zA-Z]+(\s[a-zA-Z]+)+$/";
    $valEmail = "/^[a-zA-Z0-9]+@[a-z]+.([a-z]+)+$/";
    $valTelefone = "/^[0-9]+$/";
    $valCpf = "/^[0-9]{3}\./";

?>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resultado</title>

    <style>
        * {
            padding: 0px;
            margin: 0px;
        }

        body {
            background: linear-gradient(to bottom, #1e293b, #2b8cb3);
            color: white;
            font-family: Candara;
            height: 100vh;

            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 20px
        }

        .resultado {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 30px;
            border: 1px solid black;
            background: #c8c4c4;
            color: black;
            gap: 30px;
            border-radius: 20px;
        }

        .resultado a {
            text-decoration: none;
            color: black;
            background: #48d57a;
            padding: 10px;
            border-radius: 15px;
        }

        .resultado a:hover {
            background: rgba(19, 184, 77, 0.46);
        }

    </style>

</head>
<body>
<div class="resultado">
    <h1>RESULTADO</h1>
    <p>
        <?php
        if (preg_match($valNome, $nome)) {
            echo "Seu nome: <span style='color: #183dd5; '> $nome</span>";
        } else {
            echo "<p> Ops! Parece que o formato do nome digitado está <span style='color: darkred'>incorreto</span>. </p>
            <a href='aula_regex.php'>TENTAR NOVAMENTE</a>
";
        }

        if (preg_match($valEmail, $email)) {
            echo "<br>Seu email: <span style='color: #183dd5; '> $email</span>";
        }

        if(preg_match($valTelefone, $telefone)){
            echo "<br>Seu telefone: <span style='color: #183dd5; '> $telefone</span>";
        }

        if(preg_match($valCpf, $cpf)){
            echo "<br> Seu CPF: <span style='color: #183dd5; '> $cpf</span>";
        }


        ?>
    </p>
</div>

</body>
</html>