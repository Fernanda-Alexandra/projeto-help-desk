<?php

require_once "./Repository/usuarioRepository.php";
class UsuarioController extends GenericController {
	
	function __construct() {
		parent::__construct();
		$this->table = "usuarios";
		$this->repository =  new UsuarioRepository();

	}

	 function authenticate($user, $pass) {

		return $this->repository->authenticate($user,$pass);
		

	}
	

}





