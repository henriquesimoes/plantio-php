<?php
    class Database {
        function __construct(){
            // conexão com o banco

            $this->db = '$db';
        }

        public function insert(){
            // código de inserção dos dados
        }

        public function retrieve(){
            return new Produto('Something');
        }
    }