<?php
class Usuario {
	private  $id;
	private  $username;
	private  $senha;
	private $papel;
	
	public function getId() {
		return $this->id;
	}
	public function setId($id) {
		$this->id= $id;
		
	}
	public function getUsername() {
		return $this->username;
    }
    public function setUsername($userName) {
		$this->username= $userName;
	}
    
     public function getSenha()	{
		 return $this->senha;
	 }
		
    public function setSenha ($senha) {
         $this->senha= $senha;		
    }
	
	public function getPapel() {
		return $this->idpapel;
	}
	public function setPapel($papel)  {
		$this->papel= $papel;
	}
}	
?>