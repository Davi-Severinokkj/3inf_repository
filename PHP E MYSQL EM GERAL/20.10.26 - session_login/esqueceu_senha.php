<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar senha | SysLogin</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main class="container">
        <form action="verificar_dados.php" method="POST"
              class="formulario">
            <h1>Recuperar acesso</h1>
            <p>Informe os dados usados no cadastro.</p>

            <label for="nome">Nome completo</label>
            <input type="text" id="nome" name="nome"
                   maxlength="150" required>

            <label for="cpf">CPF</label>
            <input type="text" id="cpf" name="cpf"
                   inputmode="numeric" pattern="[0-9]{11}"
                   maxlength="11" required>

            <label for="email">E-mail cadastrado</label>
            <input type="email" id="email" name="email"
                   required>

            <button type="submit">Confirmar dados</button>

            <div class="links">
                <a href="index.php">Voltar ao login</a>
            </div>
        </form>
    </main>
</body>
</html>
