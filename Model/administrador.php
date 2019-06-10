<?php
class Administrador {
	private  $id;
	private  $username;
	private  $senha;
	
	public function getId() {
		return $this->id;
	}
	public function setId($id) {
		$this->id= $id;
		
	}
	public function getUsername() {
		return $this->username;
    }
    public function setUsername($nome) {
		$this->username= $nome;
	}
    
     public function getSenha()	{
		 return $this->senha;
	 }
		
    public function setSenha ($senha) {
         $this->senha= $senha;		
    }
	
}	
?>