<?php
	class Emprestimo{
		private $idEmprestimo;
		private $dataEmprestimo;
		private $dataEntrega;
		private $idCliente;
		private $idLivro;

		public function setidEmprestimo($idEmprestimo){
			$this->idEmprestimo = $idEmprestimo;
		}

		public function getidEmprestimo(){
			return $this->idEmprestimo;
		}

		public function getIdLivro(){
			return $this->idLivro;
		}

		public function setIdLivro($idLivro){
			$this->idLivro = $idLivro;
		}

		public function getIdCliente(){
			return $this->idCliente;
		}

		public function setIdCliente($idCliente){
			$this->idCliente = $idCliente;
		}

		private function setdataEmprestimo($dataEmprestimo){
			$this->dataEmprestimo = $dataEmprestimo;
		}

		public function getdataEmprestimo(){
			return $this->dataEmprestimo;
		}

		private function setdataEntrega($dataEntrega){
			$this->dataEntrega = $dataEntrega;
		}

		public function getdataEntrega(){
			return $this->dataEntrega;
		}
	}
?>
