<?php
    class View {
        function __construct($view){
            $this->view = $view;
        }

        public function render(){
            include_once 'views/' . $this->view . '.php';
        }
    }