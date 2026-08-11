<?php
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
            background: #2b8cb3;
            height: 100vh;
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

        .form_interface{
            display: flex;
            margin: auto;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 50px;
            text-align: center;
            color: #28A745;
            border-radius: 15px;
            width: 500px;
            height: auto;
            background-color: #F8F9FA;
            font-size: 20pt;
        }
        a{
            color: black;
            text-decoration: none;
        }
        a:hover{
            color: #1e3a8a;
        }
    </style>
</head>
<body>

    <div class="form_interface">
        <div>
            <a href="formulario_cadastro.php">Consultar Cadastro</a>
        </div>
        <div>
            <a href="formulario_cadastro.php">Cadastrar</a>
        </div>
        <form action="formulario_exit.php" method="POST">
            <label>Nome:</label>
            <input type="text" name="nome" required autocomplete="off">

            <br>

            <label>E-mail:</label>
            <input type="email" name="email" required autocomplete="off">

            <br>

            <label>Celular:</label>
            <input type="tel" name="telefone" required autocomplete="off">

            <br>

            <button type="submit">ENVIAR</button>

        </form>

    </div>
</body>
</html>