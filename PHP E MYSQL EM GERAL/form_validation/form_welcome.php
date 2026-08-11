<?php
?>
<!DOCTYPE html>
<html>
<head>
    <title>Form Welcome</title>
</head>
<body>

<p>No método GET a informações digitadas são mostradas na barra de URL</p>
<p>No método POST elas são suprimidas.</p>


Bem-vindo Sr. Dr. <?php echo "<b>" . $_REQUEST["nome"] ."</b>";?><br>

Seu e-mail cadastrado foi: <?php echo "<b>" . $_REQUEST["email"] ."</b>";?><br>

</body>
</html>