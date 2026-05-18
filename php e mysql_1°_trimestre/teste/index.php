<?php
?>
<!DOCTYPE html>
<html lang='pt-br'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Menu Principal</title>
    <style>
        body{
            font-family:Arial,sans-serif;
            background:linear-gradient(135deg,#0f172a,#1e293b);
            display:flex;justify-content:center;
            align-items:center;
            height:100vh;
            margin:0
        }
        .card
        {background:#fff;
            padding:40px;
            border-radius:20px;
            box-shadow:0 20px 40px rgba(0,0,0,.25);
            text-align:center;
            width:360px;
        }
        a
        {
            display:block;
            text-decoration:none;
            background:#2563eb;
            color:#fff;padding:14px;
            margin:12px 0;
            border-radius:12px;
            font-weight:bold;
        }
        a:hover{
            background:#1d4ed8
        }
    </style>
</head>
<body>
    <div class='card'>
        <h1>Sistema</h1>
            <a href='cadastrar.php'>Cadastrar</a>
            <a href='consultar.php'>Consultar Cadastro</a>
    </div>
</body>
</html>
