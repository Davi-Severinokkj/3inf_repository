<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body{
            background: linear-gradient(135deg,#145c5c,#1f8585);
            color: white;

            display: flex;
            flex-direction: column;
            align-items: center;

            min-height: 100vh;
            padding: 40px 20px;
        }

        h1, h2{
            margin-bottom: 25px;
            text-align: center;
        }

        form{
            width: 100%;
            max-width: 450px;

            background: rgba(255,255,255,.08);
            backdrop-filter: blur(10px);

            padding: 30px;
            border-radius: 18px;

            display: flex;
            flex-direction: column;
            gap: 10px;

            box-shadow: 0 10px 30px rgba(0,0,0,.25);
        }

        label{
            text-align: left;
            font-weight: bold;
            margin-top: 10px;
        }

        input{
            width: 100%;
            padding: 12px;

            border: none;
            border-radius: 10px;

            font-size: 15px;

            outline: none;

            transition: .2s;
        }

        input[type="number"],
        input[type="text"]{
            background: white;
        }

        input:focus{
            transform: scale(1.01);
            box-shadow: 0 0 0 3px rgba(173,255,47,.4);
        }

        input[type="submit"]{
            margin-top: 18px;

            background: #adff2f;
            color: #173737;

            font-weight: bold;
            cursor: pointer;
        }

        input[type="submit"]:hover{
            transform: translateY(-2px);
        }

        br{
            display: none;
        }

        h2{
            background: rgba(255,255,255,.08);
            padding: 25px;
            border-radius: 16px;
            width: fit-content;
        }
    </style>
    <title></title>
</head>
<body>

</body>
</html>

<?php
$temperatura = $_REQUEST["temperatura"];
$unidade_1 = $_REQUEST["unidade_1"];
$unidade_2 = $_REQUEST["unidade_2"];

function conversao($temperatura, $unidade_1, $unidade_2)
{
    if ($unidade_1 === $unidade_2) {
        return $temperatura;
    }

    // Celsius
    elseif ($unidade_1 === "C" && $unidade_2 === "F") {
        return ($temperatura * 9/5) + 32;

    } elseif ($unidade_1 === "C" && $unidade_2 === "K") {
        return $temperatura + 273.15;

    } elseif ($unidade_1 === "C" && $unidade_2 === "Re") {
        return $temperatura * 0.8;
    }

    // Fahrenheit
    elseif ($unidade_1 === "F" && $unidade_2 === "C") {
        return ($temperatura - 32) * 5/9;

    } elseif ($unidade_1 === "F" && $unidade_2 === "K") {
        return (($temperatura - 32) * 5/9) + 273.15;

    } elseif ($unidade_1 === "F" && $unidade_2 === "Re") {
        return ($temperatura - 32) * 4/9;
    }

    // Kelvin
    elseif ($unidade_1 === "K" && $unidade_2 === "C") {
        return $temperatura - 273.15;

    } elseif ($unidade_1 === "K" && $unidade_2 === "F") {
        return (($temperatura - 273.15) * 9/5) + 32;

    } elseif ($unidade_1 === "K" && $unidade_2 === "Re") {
        return ($temperatura - 273.15) * 0.8;
    }

    // Réamur
    elseif ($unidade_1 === "Re" && $unidade_2 === "C") {
        return $temperatura * 5/4;

    } elseif ($unidade_1 === "Re" && $unidade_2 === "F") {
        return ($temperatura * 9/4) + 32;

    } elseif ($unidade_1 === "Re" && $unidade_2 === "K") {
        return ($temperatura * 5/4) + 273.15;
    }

    return "Conversão inválida";
}

// TESTE
$resultado = conversao($temperatura, $unidade_1, $unidade_2);

echo "<h2>RESULTADO: $resultado</h2>";
?>