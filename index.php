<?php
    require_once 'inc.php';

    $view = new View('index');
    $view->produtos = $db->retrieve();
    $view->render();