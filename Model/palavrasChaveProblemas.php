<?php
class PalavraChaveProblema {
	private $palavraChave;
	private $problema;
	
	public function getPalavraChave() {
		return $this->palavraChave;
	}
	public function setPalavraChave($palavraChave) {
		$this->palavraChave= $palavraChave;
		
	}
	public function getProblema() {
		return $this->problema;
    }
    public function setProblema($problema) {
		$this->problema= $problema;
	}

}
?>	