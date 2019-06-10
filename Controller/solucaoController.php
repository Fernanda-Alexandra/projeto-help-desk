<?php
class SolucaoController extends GenericController {

    function __construct() {
        parent::__construct();
		$this->repository =  new SolucaoRepository();
    }	
}

?>