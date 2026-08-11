<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aula Regex</title>

    <style>
        * {
            padding: 0px;
            margin: 0px;
        }

        body {
            background: #1e293b;
            height: 96vh;
            display: flex;
            align-items: center;
            justify-content: center;

        }

        .formulario {
            margin: 30px;
            font-family: Arial;
            display: block;
            justify-content: center;
            align-items: center;
            flex-direction: row;
            color: white;
        }

        .formulario_content {
            margin: 30px;
            font-family: Arial;
            font-size: 15px;
            display: flex;
            text-align: start;
            justify-content: center;
            align-items: center;
            flex-direction: row;
            color: white;
            max-width: 200px;
            background: #2b8cb3;
            padding: 40px;
            border-radius: 30px;
        }

        .formulario input {
            border: none;
            border-radius: 3px;
            padding: 10px;
            margin: 5px;
        }

        .formulario_content input[type=submit] {
            padding: 10px;
            background: #48d57a;
            border: none;
        }

        .formulario_content input[type=submit]:hover {
            background: ;
            transition: 0.3s;
            transform: scale(1.03);
            background: rgba(224, 227, 223, 0.58)
        }

    </style>

</head>
<body>
<div class="formulario">
    <div class="formulario_content">
        <form action="form_resposta.php" method="post">
            Nome Completo: <input type="text" name="nome" id="" placeholder="Seu nome completo"><br>
            E-mail: <input type="text" name="email" id="" placeholder="exemplo@exemplo.com"><br>
            Telefone: <input type="text" name="telefone" id="" placeholder="(00)00000-0000"><br>
            CPF: <input type="text" name="cpf" id="" placeholder="000.000.000-00"><br>

            <input type="submit" name="" id="" value="Me aperte!">

        </form>
    </div>

</div>
</body>
</html>
