<?php
	class Cliente{
		private $idCliente;
		private $nome;
		private $username;
		private $senha;
		private $disponibilidade

		public function setnome($nome){
			$this->nome = $nome;
		}

		public function getnome(){
			return $this->nome;
		}

		public function getIdLivro(){
			return $this->idLivro;
		}

		public function setAutor($autor){
			$this->autor = $autor;
		}

		private function setusername($username){
			$this->username = $username;
		}

		public function getusername(){
			return $this->username;
		}

		private function setSenha($senha){
			$this->senha = $senha;
		}

		public function getSenha(){
			return $this->senha;
		}

		private function setDisponibilidade($disponibilidade){
			$this->disponibilidade = $disponibilidade;
		}

		public function getDisponibilidade(){
			return $this->disponibilidade;
		}

	}
?>
