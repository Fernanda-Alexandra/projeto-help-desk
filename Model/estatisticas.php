<?php
class Estatistica {
	private  $id;
	private  $quantidadeSolucionada;
	private $busca;
	
	public function getId() {
		return $this->id;
	}
	public function setId($id) {
		$this->id= $id;
		
	}
	public function getQuantidadeSolucionada() {
		return $this->quantidadesolucionada;
    }
    public function setquantidadeSolucionada($quantidadeSolucionada) {
		$this->quantidadesolucionada= $quantidadeSolucionada;
	}
    
     public function getBusca()	{
		 return $this->busca;
	 }
		
    public function setBusca ($busca) {
         $this->idbusca= $busca;		
    }
	
}	
?>