<?php
    include_once("connection.php"); 
    
    $nomeP = $_POST['nomeP'];
    $descricao = $_POST['descricao'];
    $valor = $_POST['valor'];

    $sql = "INSERT INTO produtos (nome, preco, descricao) VALUES ('$nomeP', '$valor', '$descricao')";
    
    if (mysqli_query($conexao, $sql)) {
        echo 'Novo registro inserido com sucesso!';
        header('Location: index.php');
    } else {
        echo 'Erro ao inserir: ' . mysqli_error($conexao);
    }
    ?>