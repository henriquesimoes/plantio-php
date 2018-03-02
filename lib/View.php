<?php
    class View {
        function __construct($view){
            $this->view = $view;
        }

        public function render($view = null){
            if($view !== null){
                $this->view = $view;
            }
            include_once 'views/' . $this->view . '.php';
        }
    }