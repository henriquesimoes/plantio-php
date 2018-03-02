<?php
    require_once 'lib/Database.php';
    require_once 'lib/View.php';
    require_once 'model/Produto.php';

    function invalidParam(){
        header('Location: error.php');
        exit();
    }

    $db = new Database();