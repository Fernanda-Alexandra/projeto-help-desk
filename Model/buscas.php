<?php
class Busca {
	private  $id;
	private  $termoBuscado;
	private $palavraChave;
	
	public function getId() {
		return $this->id;
	}
	public function setId($id) {
		$this->id= $id;
		
	}
	public function getTermoBuscado() {
		return $this->termobuscado;
    }
    public function setTermoBuscado($termoBuscado) {
		$this->termobuscado= $termoBuscado;
	}
	public function getPalavraChave() {
		return $this->PalavraChave;
    }
    public function setPalavraChave($palavraChave) {
		$this->idPalavraChave= $palavraChave;
	}
	
}	

?>