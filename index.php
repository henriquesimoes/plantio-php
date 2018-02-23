<?php
    require_once 'inc.php';

    $view = new View('index');
    $view->data = $db->retrieve();
    $view->render();