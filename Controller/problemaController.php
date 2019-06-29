<?php
require_once "./Repository/problemaRepository.php";

class ProblemaController extends GenericController {
	
	function __construct() {
        parent::__construct();
		$this->repository =  new ProblemaRepository();
    }
	
}

?>