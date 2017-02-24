<?php
	class Autenticacao {

		private $ca = NULL;

		function __construct($ca) {
			if(empty($ca)) {
				throw new Exception('Chave de Acesso Inválida');
			}
			$this->$ca = $ca;
		}

		public function is_autentica() {
			$sql = "SELECT * FROM ca WHERE ca = ".$ca;
		}
	}
?>