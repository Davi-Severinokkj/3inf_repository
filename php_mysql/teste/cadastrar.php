<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }
        body{
            font-family:Arial, sans-serif;
            background:linear-gradient(135deg,#dbeafe,#eef2ff);
            height:100vh;
            display:flex;
            justify-content:center;
            align-items:center;
        }
        .box{
            background:#ffffff;
            padding:35px;
            width:420px;
            border-radius:20px;
            box-shadow:0 15px 35px rgba(0,0,0,0.15);
        }
        h2{
            text-align:center;
            margin-bottom:20px;
            color:#1e3a8a;
        }
        input{
            width:100%;
            padding:12px;
            margin-bottom:14px;
            border:1px solid #cbd5e1;
            border-radius:10px;
        }
        button{
            width:100%;
            padding:12px;
            border:none;
            border-radius:10px;
            background:#16a34a;
            color:white;
            font-weight:bold;
            cursor:pointer;
        }
        button:hover{
            background:#15803d;
        }
    </style>
</head>
<body>
<div class="box">
    <h2>Cadastrar</h2>
    <form action="saída_cadastro.php" method="post">
        <input type="text" name="nome" placeholder="Nome" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="text" name="telefone" placeholder="Telefone" required>
        <button type="submit">Salvar Cadastro</button>
    </form>
</div>
</body>
</html>