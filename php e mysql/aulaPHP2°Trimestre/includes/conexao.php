<?php

try{
    $con = new mysqli("localhost", "root", "", "escola");
    $con->set_charset("utf8mb4");
} catch(mysqli_sql_exception $e){
    echo "Erro ao inserir o banco de dados: " . $e -> getMessage();
} finally {
    $con -> close();
}

?>