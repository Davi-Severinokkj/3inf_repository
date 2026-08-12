<?php

$nome = $_REQUEST["nome"];
$senha = $_REQUEST['password'];
$email = $_REQUEST['email'];
$telefone = $_REQUEST['telefone'];

try {
    $connect = new mysqli("localhost", "root", "Seemg@1222017", "recanto_do_cafe");
    $connect->set_charset("utf8");

    $sql1 = "INSERT INTO usuario(nome , senha , email, telefone) values('$nome' , '$senha', '$email', '$telefone')";
    $connect->query($sql1);

} catch (mysqli_sql_exception $e) {
    echo "<p style='color: white; font-weight: bolder;'>Erro ao inserir no banco de dados: " . $e->getMessage() . "</p>\n";
} finally {
    $connect->close();
}

include("includes/head.php");


?>

</head>

<!DOCTYPE html>
<html lang="pt-br">


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
    <span style="color: white;">Olá,
            <span><?php echo $_REQUEST['nome']; ?></span>
        </span>


</header>
<section class="hero">

    <div class="hero-conteudo">

        <span class="tag">
            ☕ Cafés especiais • Brunch • Almoço
        </span>

        <h1>
            O sabor que transforma<br>
            qualquer momento.
        </h1>

        <p>
            Descubra um ambiente acolhedor, cafés preparados com excelência,
            doces artesanais e experiências inesquecíveis.
        </p>

        <div class="hero-botoes">

            <a href="https://livemenu.app/menu/62d8294bf7f44a0021f7a379"
               target="_blank"
               class="btn-principal">

                Ver Cardápio

            </a>

            <a href="#servicos"
               class="btn-secundario">

                Conheça nossos serviços

            </a>

        </div>

        <div class="hero-info">

            <div>

                <h2>+500</h2>

                <span>Clientes felizes</span>

            </div>

            <div>

                <h2>★★★★★</h2>

                <span>Avaliação média</span>

            </div>

            <div>

                <h2>100%</h2>

                <span>Produtos artesanais</span>

            </div>

        </div>

    </div>

</section>
<section id="servicos" class="servicos">

    <div class="card">
        <div class="texto">
            <h2>DELICIOSOS DOCES & SALGADOS</h2>

            <p>
                Descubra sabores preparados com carinho para deixar
                seu momento ainda mais especial.
            </p>
        </div>

        <img src="img/doce.jpg">
    </div>


    <div class="card invertido">

        <img src="img/cesta.png">

        <div class="texto">
            <h2>BOXES - CESTAS DE CAFÉ DA MANHÃ</h2>

            <p>
                Monte experiências únicas com cafés,
                doces e presentes.
            </p>
        </div>

    </div>


    <div class="card">

        <div class="texto">
            <h2>BRUNCH</h2>

            <p>
                Uma experiência deliciosa para qualquer horário.
            </p>
        </div>

        <img src="img/brunch.png">

    </div>


    <div class="card invertido">

        <img src="img/almoço.png">

        <div class="texto">

            <h2>ALMOÇO</h2>

            <p>
                Refeições especiais para deixar seu dia melhor.
            </p>

        </div>

    </div>


    <div class="card">

        <div class="texto">

            <h2>CAFETERIA</h2>

            <p>
                Cafés especiais preparados na hora.
            </p>

        </div>

        <img src="img/café.png">

    </div>

</section>
<section class="cardapio">


    <div class="conteudo-cardapio">

        <h1>DELICIAS DO NOSSO CARDÁPIO</h1>

        <div class="onda"></div>

        <p>
            Com um cardápio preparado para todos os momentos do dia,
            o Recanto do Café oferece um ambiente acolhedor e sabores
            especiais para cafés, doces, salgados e refeições.
        </p>

        <div class="galeria">

            <img src="img/card1.jpg">

            <img src="img/card2.png">

            <img src="img/card3.png">

            <img src="img/card4.png">

        </div>

        <a href="https://livemenu.app/menu/62d8294bf7f44a0021f7a379" class="btn-cardapio" target="_blank">
            VER CARDÁPIO COMPLETO
        </a>

    </div>

</section>

<footer>

    <div class="footer-conteudo">

        <div class="footer-info">

            <h3>Recanto do Café</h3>

            <p>
                Café, sabor e momentos especiais para o seu dia.
            </p>

            <span>
                    &copy; 2026 Recanto do Café • Todos os direitos reservados.
                </span>

        </div>

        <div class="footer-redes">

            <h4>Nos acompanhe</h4>

            <div class="redes">

                <a href="#" aria-label="WhatsApp">
                    <i class="fa-brands fa-whatsapp"></i>
                </a>

                <a href="#" aria-label="Instagram">
                    <i class="fa-brands fa-instagram"></i>
                </a>

                <a href="#" aria-label="Facebook">
                    <i class="fa-brands fa-facebook-f"></i>
                </a>

            </div>

        </div>

    </div>

</footer>
</body>

</html>