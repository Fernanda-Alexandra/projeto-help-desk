<?php
class Problema {
	private  $id;
	private  $descricao;
	private $autor;
	
	public function getId() {
		return $this->id;
	}
	public function setId($id) {
		$this->id= $id;
		
	}
	public function getDescricao() {
		return $this->descricao;
    }
    public function setDescricao($descricao) {
		$this->descricao= $descricao;
	}
	
    public function getAutor() {
		return $this->autor;
    }
    public function setAutor($autor) {
		$this->autor= $autor;
	}
    	
}
?>	