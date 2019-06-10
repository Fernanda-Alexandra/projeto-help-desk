<?php
class UsuarioController extends GenericController {
	
	function __construct() {
		parent::__construct();
		$this->table = "usuarios";
	}
	function login ($username, $senha){

		if($this->authenticate($username, $senha)) {
			session_start();

			$user = new Usuario ($username);

			$_SESSION ['user'] = $user;

			return true;
		} else {

			return false; 
		}

	}

	static function authenticate($u, $p) {
		$authentic = false;

		if($u == 'admin' && $p == 'admin') $authentic = true;
		return $authentic;

	}
	fuction logout () {


		session_start();


	}

}


?>


