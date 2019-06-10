<?php
class PalavraChave {
	private  $id;
	private  $termo;
	
	public function getId() {
		return $this->id;
	}
	public function setId($id) {
		$this->id= $id;
		
	}
	public function getTermo() {
		return $this->termo;
    }
    public function setTermo($termo) {
		$this->termo= $termo;
	}

}
?>	