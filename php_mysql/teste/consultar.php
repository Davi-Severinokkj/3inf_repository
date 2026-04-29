<!DOCTYPE html>
<style>
    *{
        margin:0;
        padding:0;
        box-sizing:border-box;
    }
    body{
        font-family:Arial, sans-serif;
        background:linear-gradient(135deg,#f5f3ff,#ede9fe);
        height:100vh;
        display:flex;
        justify-content:center;
        align-items:center;
    }
    .box{
        background:white;
        padding:35px;
        width:420px;
        border-radius:20px;
        box-shadow:0 15px 35px rgba(0,0,0,0.15);
    }
    h2{
        text-align:center;
        margin-bottom:20px;
        color:#6d28d9;
    }
    input{
        width:100%;
        padding:12px;
        margin-bottom:14px;
        border:1px solid #cbd5e1;
        border-radius:10px;
    }
    button{
        width:100%;
        padding:12px;
        border:none;
        border-radius:10px;
        background:#7c3aed;
        color:white;
        font-weight:bold;
        cursor:pointer;
    }
    button:hover{
        background:#6d28d9;
    }
</style>
</head>
<body>
<div class="box">
    <h2>Consultar Cadastro</h2>
    <form action="saída_consulta.php" method="get">
        <input type="text" name="nome" placeholder="Digite o nome">
        <button type="submit">Consultar</button>
    </form>
</div>
</body>
</html>
