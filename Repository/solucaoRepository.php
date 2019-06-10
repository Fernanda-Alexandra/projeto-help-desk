<?php
 class ProblemaRepository extends GenericRepository {

    function __construct() {
        $this->table = "solucoes";
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
      return parent::query("SELECT s.id, s.conteudo, pc.termo
                                  FROM palavraschave pc 
                                       INNER JOIN
                                             palavraschave_problemas pp ON(pp.idPalavraChave = pc.id)
                                       INNER JOIN solucoes s ON(pp.idProblema = s.id)
                                  WHERE pc.termo LIKE '%$palavraChave%' ");   
    }

}

	