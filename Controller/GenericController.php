<?php
abstract class GenericController{

     protected function index()
     {
       return $this->repository->findAll();
     }
     protected function findAll()
     {
      return $this->repository->findAll() ;  
     }
     protected function get($id)
    {
         return $this->repository->get($id);
      }
	
	protected $repository;
	
}
 protected function authenticate()
     {
      return $this->repository->authenticate() ;  

?>