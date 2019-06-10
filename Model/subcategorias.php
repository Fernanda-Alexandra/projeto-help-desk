<?php
class Subcategoria {
	private  $id;
	private  $descricao;
	private $categoria;
	
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
	
    public function getCategoria() {
		return $this->categoria;
    }
    public function setCategoria($categoria) {
		$this->categoria= $categoria;
	}
    	
}
?>