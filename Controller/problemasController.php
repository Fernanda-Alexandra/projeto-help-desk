<?php
class ProblemaController extends GenericController {
	
	function __construct() {
        parent::__construct();
		$this->repository =  new ProblemaRepository();
    }
	
}

?>