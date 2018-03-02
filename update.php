<?php
    require_once 'inc.php';

    $cod = isset($_POST['codigoprod'])? $_POST['codigoprod'] : invalidParam();
    $nome = isset($_POST['nome'])? $_POST['nome'] : invalidParam();
    $preco = isset($_POST['preco'])? $_POST['nome'] : invalidParam();
    $categoria = isset($_POST['categoria'])? $_POST['nome'] : invalidParam();
    $estoque =isset($_POST['estoque'])? $_POST['estoque'] : invalidParam();
    $imagem = isset($_POST['imagem'])? $_POST['imagem'] : invalidParam();

    $product = new Produto($nome, $preco, $categoria, $estoque, $imagem);
    $product->setCodigoProd($cod);
    $result = $db->update($product);

    if($result){
        header('Location: index.php');
        exit();
    }
    else {
        header('Location: error.php');
    }