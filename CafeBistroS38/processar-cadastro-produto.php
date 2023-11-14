<?php
require_once "conexao.php";
// Obter os dados do formulário
$nome = $_POST["nome"];
$tipo = $_POST["tipo"];
$descricao = $_POST["descricao"];
$preco = $_POST["preco"];
$imagem = $_POST["imagem"];


    // Inserir os dados na tabela 'produto'
    $sql = "INSERT INTO produtos (nome, tipo, descricao, preco, imagem) VALUES 
    ('$nome', '$tipo', '$descricao', '$preco','$imagem')";

    if ($conn->query($sql) === TRUE) {
        header("Location: cadastrar-usuario-sucesso.php");
        exit();
    } else {
        header("Location: cadastrar-usuario.php?erro=2");
        exit();
    }
    $conn->close();
?>