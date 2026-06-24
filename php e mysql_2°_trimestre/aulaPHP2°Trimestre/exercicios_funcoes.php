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
    <title>Conversão de Temperatura</title>
</head>

<body>
    <h1>Conversão de Temperatura</h1>

    <form action="funcoes_exit.php" method="POST">
        <label for="">VALOR</label>
        <input type="number" name="temperatura" id=""><br>

        <label for="">UNIDADE DE MEDIDA</label>
        <input type="text" name="unidade_1" id=""><br>

        <label for="">CONVERSÃO</label>
        <input type="text" name="unidade_2" id=""><br>
        <input type="submit" name="ME APERTA QUE EU GOSTO" id="">

        <h3 style="text-align: center">UNIDADES: C, F, K, Re</h3>
    </form>


</body>
</html>