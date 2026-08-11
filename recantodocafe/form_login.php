<?php
include("includes/head.php");

?>

</head>


<header>
    <div class="logo">
        <a href="index.php">
            <img src="img/logo.png" alt="Recanto do Café">
        </a>
    </div>

    <nav>
        <ul>
            <li><a href="suporte.html">Suporte</a></li>
            <li><a href="servicos.html">Serviços</a></li>
            <li><a href="sobre.html">Sobre nós</a></li>
            <li><a href="clientes.html">Clientes</a></li>
        </ul>
    </nav>

    <div class="form">
        <button>
            <a href="form_register.php">Registre-se</a>
        </button>
    </div>

</header>



<?php

$nome = $senha = "";
$nome_err = $senha_err = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["nome"])) {
        $nome_err = "Por favor, insira o seu nome!";
    } else {
        $nome = verificar_entrada($_POST["nome"]);
    }
    if (empty($_POST["password"])) {
        $senha_err = "Por favor, insira a senha!";
    } else {
        $senha = verificar_entrada($_POST["password"]);
    }
}

function verificar_entrada($entrada)
{
    $entrada = trim($entrada);
    $entrada = stripslashes($entrada);
    $entrada = htmlspecialchars($entrada);
    $entrada = strtolower($entrada);
    return $entrada;
}


?>


<main>
    <div class="form_content">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

            Nome:<br>
            <input type="text" name="nome" id=""><span style="color: red;"> * <?php $nome_err; ?></span><br>
            Senha:<br>
            <input type="text" name="password" id=""><span style="color: red;"> * <?php $senha_err; ?></span><br>

            <input type="submit" value="Enviar"><br>
            <?php
            echo $nome . "<br>";
            echo $senha;
            ?>
        </form>
    </div>


</main>

<?php

include("includes/footer.php");
?>
