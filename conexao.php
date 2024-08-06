<?php
    $localhost = "localhost"; //endereço do servidor
    $usuario = "root";//usuário
    $senha = "";
    $db = "netflix";
    $conexao= new mysqli($localhost, $usuario, $senha, $db);
    if($conexao->connect_error) {
    die("Erro de Conexao : " . $conexao->connect_error);
    }
    
    //$conexao->close();
    //SE FOR NO XAMPP NÃO TEM SENHA [$senha = "";] ;
?>