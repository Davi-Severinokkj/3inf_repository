<?php

session_start();

$nome = $senha = $email = $telefone = "";
$nome_err = $senha_err = $email_err = $telefone_err = "";


include("includes/head.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["nome"])) {
        $nome_err = "Por favor, insira o seu nome!";
    } else {
        $nome = verificar_entrada($_POST["nome"]);
        // CORREÇÃO: Adicionado espaço no regex /^[a-zA-Z ]*$/
        if (!preg_match("/^[a-zA-ZÀ-ÿ\s]+$/", $nome)) {
            $nome_err = "Permitido a entrada apenas de letras e espaços em brancos. <span style='color: red;'>Utilize Nome Sobrenome da Silva</span>";
        }
    }

    if (empty($_POST["password"])) {
        $senha_err = "Por favor, insira a senha!";
    } else {
        // CORREÇÃO: Primeiro pegamos o valor do $_POST para depois testar no preg_match
        $senha = verificar_entrada($_POST["password"]);
        if(!preg_match("/^[a-zA-Z0-9_@!#$%¨&()]*$/",$senha)){
            $senha_err = "Padrão de senha incorreto. <span style='color: red;'>Utilize Senha12345 (Apenas letras e números)</span>";
        }
    }

    // CORREÇÃO: Mudado de $POST para $_POST
    if (empty($_POST['email'])) {
        $email_err = "Por favor, insira o email!";
    } else {
        $email = verificar_entrada($_POST["email"]);
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $email_err = "Padrão de E-mail incorreto. <span style='color: red;'>Utilize exemplo@exemplo.com</span>";
        }
    }

    // CORREÇÃO: Mudado de $POST para $_POST
    if (empty($_POST['telefone'])) {
        $telefone_err = "Por favor, insira o telefone!";
    } else {
        $telefone = verificar_entrada($_POST["telefone"]);
        if(!filter_var($telefone, FILTER_VALIDATE_INT)){
            $telefone_err = "Digite seu telefone corretamente. <span style='color: red;'>Utilize 00999999999</span>";
        }
    }
}

function verificar_entrada($entrada)
{
    $entrada = trim($entrada);
    $entrada = stripslashes($entrada);
    $entrada = htmlspecialchars($entrada);
    // Dica: Se quiser que a senha aceite letras maiúsculas, remova a linha abaixo
    return $entrada;
}

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

<main>

    <div class="form_content">

        <!-- CORREÇÃO: Adicionado o "echo" antes do htmlspecialchars -->
        <form action="form_register_output.php" method="post">

            Nome completo:<br>
            <input type="text" name="nome" value="<?= htmlspecialchars($nome) ?>">
            <span>* <?= $nome_err ?></span>
            <br>

            Senha:<br>
            <input type="password" name="password">
            <span>* <?= $senha_err ?></span>
            <br>

            E-mail:<br>
            <input type="email" name="email" value="<?= htmlspecialchars($email) ?>">
            <span><?= $email_err ?></span>
            <br>

            Telefone:<br>
            <input type="text" name="telefone" value="<?= htmlspecialchars($telefone) ?>">
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
