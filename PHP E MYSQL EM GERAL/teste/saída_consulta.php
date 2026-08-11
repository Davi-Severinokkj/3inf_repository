<?php
$nome = $_GET["nome"];

$con = new mysqli("localhost","root","","teste");

$sql = "SELECT * FROM cadastros WHERE nome LIKE '$nome'";

$resultado = $con->query($sql);

if($resultado->num_rows > 0){

    $linha = $resultado->fetch_assoc();

}else{

    $linha = null;

}

$con->close();
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

<?php if($linha){ ?>

    <div class="card">
        <h2>Olá, <?php echo $linha["nome"]; ?>!</h2>
        <p>Email: <?php echo $linha["email"]; ?></p>
        <p>Telefone: <?php echo $linha["telefone"]; ?></p>
    </div>

<?php } else { ?>

    <div class="card">
        <h2>Cadastro não encontrado</h2>
        <a href="cadastrar.php" style="col">Cadastre-se!</a>
    </div>

<?php } ?>

</body>
</html>
