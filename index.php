<?php
    require_once 'inc.php';

    $search = isset($_GET['q'])? $_GET['q'] : '';

    $view = new View('index');
    $view->produtos = $db->retrieve($search);
    $view->render();