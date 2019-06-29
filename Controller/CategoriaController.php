<?php
require_once "./Repository/categoriaRepository.php";

class CategoriaController extends GenericController 
{

	function __construct() {
        parent::__construct();
        $this->table = "categorias";
        $this->repository =  new CategoriaRepository();

    }
	
}

?>	