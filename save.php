<?php
    require_once 'inc.php';

    $nome = isset($_POST['nome'])? $_POST['nome'] : invalidParam();
    $preco = isset($_POST['preco'])? $_POST['nome'] : invalidParam();
    $categoria = isset($_POST['categoria'])? $_POST['nome'] : invalidParam();
    $estoque =isset($_POST['estoque'])? $_POST['estoque'] : invalidParam();
    $imagem = isset($_POST['imagem'])? $_POST['imagem'] : invalidParam();

    $result = $db->insert(new Produto($nome, $preco, $categoria, $estoque, $imagem));
    if($result){
        header('Location: index.php');
        exit();
    }
    else {
        header('Location: error.php');
    }