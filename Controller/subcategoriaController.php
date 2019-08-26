<?php

class SubcategoriaController extends GenericController 
{

	function __construct() {
        parent::__construct();
        $this->table = "subcategorias";
        $this->repository =  new SubcategoriaRepository();

    }
	
}

?>	