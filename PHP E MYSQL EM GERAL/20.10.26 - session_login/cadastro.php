<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro | SysLogin</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main class="container">
        <form action="salvar_usuario.php" method="POST"
              class="formulario">
            <h1>Criar conta</h1>
            <p>Preencha seus dados</p>

            <label for="nome">Nome completo</label>
            <input type="text" id="nome" name="nome"
                   maxlength="150" required>

            <label for="cpf">CPF</label>
            <input type="text" id="cpf" name="cpf"
                   placeholder="Somente números"
                   inputmode="numeric" pattern="[0-9]{11}"
                   maxlength="11" required>

            <label for="email">E-mail</label>
            <input type="email" id="email" name="email"
                   maxlength="150" required>

            <label for="data_nascimento">Data de nascimento</label>
            <input type="date" id="data_nascimento"
                   name="data_nascimento" required>

            <label for="senha">Senha</label>
            <input type="password" id="senha" name="senha"
                   minlength="8" required>

            <button type="submit">Cadastrar</button>

            <div class="links">
                <a href="index.php">Voltar</a>
            </div>
        </form>
    </main>
</body>
</html>
