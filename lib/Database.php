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
        	$query = "SELECT * FROM produto";
			$stmt = $this->db->prepare($query);
			if($stmt->execute()){
				while($row = $stmt->fetch()){
					$produtos[] = $this->rowToProduto($row);
				}
				return $produtos;
			}
			else {
				return false;
			}
        }
		
		
		public function update(Produto $produto){
        	$query = "UPDATE produto SET nome = ?, preco = ?, categoria = ?, estoque = ?, imagem = ? WHERE codigoprod = ?";
			$stmt = $this->db->prepare($query);
			$codigoProd = $produto->getCodigoProd();
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
			$stmt->bindParam(6, $codigoProd);
			
			if($stmt->execute()){
				return true;
			}
			else {
				return false;
			}
		}
		
		public function delete($codigoProd){
        	$query = "DELETE FROM produto WHERE codigoprod = ?";
			$stmt = $this->db->prepare($query);
			$stmt->bindParam(1, $codigoProd);
			
			if($stmt->execute()){
				return true;
			}
			else {
				return false;
			}
		}
		
		private function rowToProduto($row){
			$nome = $row['nome'];
			$preco = $row['preco'];
			$categ = $row['categoria'];
			$estoque = $row['estoque'];
			$img = $row['imagem'];
			$codigoProd = $row['codigoprod'];
			
			$produto = new Produto($nome, $preco, $categ, $estoque, $img);
			$produto->setCodigoProd($codigoProd);
			return $produto;
		}
		
		
		
    }