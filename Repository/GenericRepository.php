<?php

abstract class GenericRepository {
    protected  $table;
    private $connnection; 
    

    public  function findAll()
    {
        $queryString = "SELECT * FROM " . $this->table; 

       return mysqli_query($this->getConnection(),$queryString);

    }
    public function get($id)
    {
        $queryString = "SELECT * FROM " . $this->table . " WHERE id = " . $id; 

       return mysqli_query($this->getConnection(),$queryString);
    }

    protected function query($SQL)
    {
      return mysqli_query($this->getConnection(),$SQL);
    }

    private function getConnection()
    {
      return ConnectionFactory::getConnection();
    }

}

	