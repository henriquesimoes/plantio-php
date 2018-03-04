<?php
    require_once 'inc.php';

    $cod = isset($_POST['codigoprod'])? $_POST['codigoprod'] : invalidParam();
    $nome = isset($_POST['nome'])? $_POST['nome'] : invalidParam();
    $preco = isset($_POST['preco'])? $_POST['preco'] : invalidParam();
    $categoria = isset($_POST['categoria'])? $_POST['categoria'] : invalidParam();
    $estoque =isset($_POST['estoque'])? $_POST['estoque'] : invalidParam();
    $imagem = isset($_POST['categoria'])? $_POST['categoria'] : invalidParam();

    $product = new Produto($nome, $preco, $categoria, $estoque, $imagem);
    $product->setCodigoProd($cod);
    $result = $db->update($product);

    if($result){
        header('Location: index.php');
    }
    else {
        header('Location: error.php');
    }
    exit();