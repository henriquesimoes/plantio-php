<?php
    class Produto {
        function __construct($nome, $preco, $categoria, $estoque, $imagem){
            $this->nome = $nome;
            $this->preco = $preco;
			$this->categoria = $categoria;
			$this->estoque = $estoque;
			$this->imagem = $imagem;
        }

        public function getNome(){
            return $this->nome;
        }
		
		public function getPreco(){
			return $this->preco;
		}
		
		public function getCategoria(){
            return $this->categoria;
        }
		
		public function getEstoque(){
            return $this->estoque;
        }
		
		public function getImagem(){
            return $this->imagem;
        }
		
		public function setNome($nome){
			$this->nome = $nome;
		}
		
		public function setPreco($preco){
			$this->preco = $preco;
		}
		
		public function setCategoria($categoria){
			$this->categoria = $categoria;
		}
		
		public function setEstoque($estoque){
			$this->estoque = $estoque;
		}
		
		public function setImagem($imagem){
			$this->imagem = $imagem;
		}
	
    }