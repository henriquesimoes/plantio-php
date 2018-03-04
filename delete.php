<?php
    require_once 'inc.php';

    $cod = isset($_GET['cod'])? $_GET['cod'] : invalidParam();

    $cod = intval($cod);

    $return = $db->delete($cod);

    if($return){
        header('Location: index.php');
    }
    else {
        header('Location: error.php');
    }
    exit();