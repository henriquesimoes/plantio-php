<?php
    class Database {
        function __construct(){
            $ds='mysql:host=localhost;dbname=plantio';
			$user = "root";
			$pass = "vertrigo";
			$db = new PDO($ds, $user, $pass);

            $this->db = $db;
        }

        public function insert(Produto $produto){
        	$query = "INSERT INTO produto (nome, preco, categoria, estoque, imagem) VALUES (?,?,?,?,?)";
			$stmt = $this->db->prepare($query);
			$nome = $produto->getNome();
			$categ = $produto->getCategoria();
			$preco = $produto->getPreco();
			$estoque = $produto->getEstoque();
			$img = $produto->getImagem();
            $stmt->bindParam(1, $nome);
			$stmt->bindParam(2, $preco);
			$stmt->bindParam(3, $categ);
			$stmt->bindParam(4, $estoque);
			$stmt->bindParam(5, $img);
			
			if($stmt->execute()){
				return true;
			}
			else {
				return false;
			}
		}

        public function retrieve(){
            return new Produto('Something');
        }
    }