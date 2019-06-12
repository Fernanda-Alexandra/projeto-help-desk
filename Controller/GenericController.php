<?php
abstract class GenericController{

  protected $repository;


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
	
	
}


?>