<?php
	define("MYSQL_HOST", "localhost");
	define("MYSQL_DBNAME", "biblioteca");
	define("MYSQL_USER", "root");
	define("MYSQL_PASSWORD", "uvanet");

	class BD
	{
		private $conexao;
		public function conectar()
		{
			return $this->conexao = mysqli_connect(MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DBNAME);
		}

		public function consultar($select){
			$query = mysqli_query($select, $this->conexao);
			$dados = array();

			while ($retorno = @mysqli_fetch_array($query)) {
				$dados[] = $retorno;
			}

			return $dados;
		}

		public function alterar($sql){
			$retornoExecucao = mysqli_query($sql, $this->conexao);

			return $retornoExecucao;
		}

		public function __destruct(){
			@mysqli_close($this->conexao);
		}
	}
?>
