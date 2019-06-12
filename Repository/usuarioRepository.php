<?php
class UsuarioRepository extends GenericRepository
{

public function authenticate($username, $senha){
return parent:: query("Select * FROM usuarios WHERE username = '$username' AND senha = '$senha'");
}

}



