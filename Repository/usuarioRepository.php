<?php
class UsuarioRepository extends GenericRepository
{
	
	function __construct() {
		$this->table = "usuarios";
		echo "PASSANDO NO CONSTRUTOR USUARIOREPOSITORY";
		var_dump($this->repository);
        die();
		
	}
	
	public function authenticate($username, $senha){
		return parent:: query("Select id FROM usuarios WHERE username = '$username' AND senha = '$senha'");

		//echo "AUTHENTICATE USUARIOREPOSITORY";
	}
	public function loginExiste($username)
	{
		return parent:: query("Select id FROM usuarios WHERE username = '$username'");
		
	}
}








