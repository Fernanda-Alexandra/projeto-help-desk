<?php
class UsuarioRepository extends GenericRepository
{
    
	function __construct() {
		parent::__construct();
		$this->table = "usuarios";
    }
    
public function authenticate($username, $senha){
return parent:: query("Select id FROM usuarios WHERE username = '$username' AND senha = '$senha'");
}

public function loginExiste($username)
{
    return parent:: query("Select id FROM usuarios WHERE username = '$username'");
  
}

}



