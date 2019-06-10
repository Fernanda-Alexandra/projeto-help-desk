<?php
class PalavraChaveSolucao {
	private $palavraChave;
	private $solucao;
	
	public function getPalavraChave() {
		return $this->palavraChave;
	}
	public function setPalavraChave($palavraChave) {
		$this->palavraChave= $palavraChave;
		
	}
	public function getSolucao() {
		return $this->solucao;
    }
    public function setSolucao($solucao) {
		$this->solucao= $solucao;
	}

}
?>	