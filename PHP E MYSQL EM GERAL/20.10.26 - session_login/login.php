<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | SysLogin</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main class="container">
        <form action="autenticar.php" method="POST" class="formulario">
            <h1>SysLogin</h1>
            <p>Acesse sua conta</p>

            <label for="email">Usuário (e-mail)</label>
            <input type="email" id="email" name="email"
                   placeholder="Digite seu e-mail" required>

            <label for="senha">Senha</label>
            <input type="password" id="senha" name="senha"
                   placeholder="Digite sua senha" required>

            <button type="submit">Entrar</button>

            <div class="links">
                <a href="cadastro.php">Cadastrar-se</a>
                <a href="esqueceu_senha.php">Esqueceu a senha?</a>
            </div>
        </form>
    </main>
</body>
</html>
