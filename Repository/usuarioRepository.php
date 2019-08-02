<?php
class UsuarioRepository extends GenericRepository
{

public function authenticate($username, $senha){
//return parent:: query("Select id FROM usuarios WHERE username = '$username' AND senha = '$senha'");
	echo "AUTHENTICATE USUARIOREPOSITORY";
}

public function loginExiste($username)
{
    return parent:: query("Select id FROM usuarios WHERE username = '$username'");
  
}

}



