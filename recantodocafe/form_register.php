<?php

include("includes/head.php");

?>

</head>

<body>

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
            <a href="form_login.php">Login</a>
        </button>
    </div>

</header>

<?php

$nome = $senha = $email = $telefone = "";

$nome_err = $senha_err = $email_err = $telefone_err = "";

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

    if (empty($_POST["email"])) {
        $email_err = "Por favor, insira o email!";
    } else {
        $email = verificar_entrada($_POST["email"]);
    }

    if (empty($_POST["telefone"])) {
        $telefone_err = "Por favor, insira o telefone!";
    } else {
        $telefone = verificar_entrada($_POST["telefone"]);
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

        <form action="form_register_output.php" method="post">

            Nome:<br>
            <input type="text" name="nome">
            <span>* <?= $nome_err ?></span>
            <br>

            Senha:<br>
            <input type="password" name="password">
            <span>* <?= $senha_err ?></span>
            <br>

            E-mail:<br>
            <input type="email" name="email">
            <span><?= $email_err ?></span>
            <br>

            Telefone:<br>
            <input type="text" name="telefone">
            <span><?= $telefone_err ?></span>
            <br>

            <input type="submit" value="Enviar">

        </form>

    </div>

</main>

<?php

include("includes/footer.php");

?>

</body>
</html>