<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];

try{
    $con = new mysqli("localhost","root","","teste");
    $con->set_charset("utf8mb4");

    $sql = "INSERT INTO cadastros(nome, email, telefone) VALUES('$nome', '$email', '$telefone')";
    $con->query($sql);
} catch(mysqli_sql_exception $e){
    echo "Erro: " . $e->getMessage();
} finally {
    $con->close();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saída</title>
    <style>
        body{
            font-family:Arial, sans-serif;
            background:linear-gradient(135deg,#dcfce7,#bbf7d0);
            height:100vh;
            display:flex;
            justify-content:center;
            align-items:center;
            margin:0;
        }
        .card{
            background:white;
            width:420px;
            padding:35px;
            border-radius:20px;
            box-shadow:0 15px 35px rgba(0,0,0,0.15);
        }
        h2{
            color:#166534;
            margin-bottom:18px;
        }
        p{
            margin-bottom:10px;
            font-size:18px;
        }
        a{
            display:inline-block;
            margin-top:15px;
            text-decoration:none;
            background:#2563eb;
            color:white;
            padding:10px 18px;
            border-radius:10px;
        }
    </style>
</head>
<body>
<div class="card">
    <h2>Cadastro Recebido</h2>
    <p><strong>Nome:</strong> <?php echo $nome; ?></p>
    <p><strong>Email:</strong> <?php echo $email; ?></p>
    <p><strong>Telefone:</strong> <?php echo $telefone; ?></p>
    <a href="index.php">Voltar</a>
</div>
</body>
</html>