<?php
	class Livro{
		private $idLivro;
		private $titulo;
		private $autor;
		private $estoque;

		public function setTitulo($titulo){
			$this->titulo = $titulo;
		}

		public function getTitulo(){
			return $this->titulo;
		}

		public function getIdLivro(){
			return $this->idLivro;
		}

		public function setAutor($autor){
			$this->autor = $autor;
		}

		private function setEstoque($estoque){
			$this->estoque = $estoque;
		}

		public function getEstoque(){
			return $this->estoque;
		}
	}
?>
