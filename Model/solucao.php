<?php
class Solucao {
	private  $id;
	private  $conteudo;
	private $subCategoria;
	private $autor;
	private  $dataCriacao;
	
	public function getId() {
		return $this->id;
	}
	public function setId($id) {
		$this->id= $id;
		
	}
	public function getConteudo() {
		return $this->conteudo;
    }
    public function setConteudo($conteudo) {
		$this->conteudo= $conteudo;
	}
	public function getSubCategoria() {
		return $this->subCategoria;
    }
    public function setSubCategoria($subCategoria) {
		$this->subCategoria= $subCategoria;
	}
	
    public function getAutor() {
		return $this->idautor;
    }
    public function setAutor($autor) {
		$this->autor= $autor;
	}
	public function getDataCriacao() {
		return $this->datacriacao;
	}
	public function setDataCriacao($dataCriacao)  {
		$this->dataCriacao= $dataCriacao;
	}
    	
}
?>	