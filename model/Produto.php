<?php
    class Produto {
        function __construct($sth){
            $this->sth = $sth;
        }

        public function getSomething(){
            return $this->sth;
        }
    }