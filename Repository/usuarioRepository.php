<?php
class UsuarioRepository extends GenericRepository
{
	
	function __construct() {
		$this->table = "usuarios";
		echo "PASSANDO NO CONSTRUTOR USUARIOREPOSITORY";
		var_dump($this);
        //die();
		
	}
	
	public function authenticate($username, $senha){

		echo "CHEGOU O USUARIOREPOSITORY AUTHENTICATE";
		
		return parent:: query("Select id FROM usuarios WHERE username = '$username' AND senha = '$senha'");

	}
	public function loginExiste($username)
	{
		return parent:: query("Select id FROM usuarios WHERE username = '$username'");
		
	}
}








