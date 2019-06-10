<?php
 class ProblemaRepository extends GenericRepository {

    function __construct() {
        $this->table = "problemas";
    }
 
    public function findAll()
    {
      return parent::findAll();
    }
    public function get($id)
    {
     return parent::get($id);
    }

    public function findByPalavraChave($palavraChave)
    {
      return parent::query("SELECT p.id, p.descricao, pc.termo
                                  FROM palavraschave pc 
                                       INNER JOIN
                                             palavraschave_problemas pp ON(pp.idPalavraChave = pc.id)
                                       INNER JOIN problemas p ON(pp.idProblema = p.id)
                                  WHERE pc.termo LIKE '%$palavraChave%' ");   
    }

}

	