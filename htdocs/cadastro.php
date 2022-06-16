<?php

    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $idade = $_POST['idade'];
    $cpf = $_POST['cpf'];
    $telefone = $_POST['telefone'];

    if($nome && $senha && $idade && $cpf && $telefone){
        $conexao = mysqli_connect("localhost:3306", "root", "");
        $banco = mysqli_select_db($conexao, "triviacraft");
    
        if($banco){
            echo("Banco Conectado");
        }else{
            echo("Banco Não Conectado");
        };

        mysqli_query($conexao, "INSERT INTO usuarios(nome, senha, idade, cpf, telefone) VALUES('$nome', '$senha', '$idade', '$cpf', '$telefone')");
    }


    

?>