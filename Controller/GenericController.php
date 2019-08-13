<?php
abstract class GenericController{

  protected $repository;
	
	 function __construct() 
    {
     
        $this->getParams();
  
    } 
    public function getParams()
    {
        $acao = isset($_GET['action']) ? $_GET['action'] : null;
        if($acao)
        {
         switch ($acao) {

                case "NOVO":
               // $this->abrirFormulario();
                break;
                case "ACESSAR":
                $id = isset($_GET['id']) ? $_GET['id'] : null;
               // $this->get($id);
                break;
              case "DETALHAR":
                $id = isset($_GET['id']) ? $_GET['id'] : null;
               // $this->detalhar($id);
                break;
                case "ATUALIZAR":
                $id = isset($_GET['id']) ? $_GET['id'] : null;
                //$this->atualizar($id);
                break;
                case "SALVAR":
               // $this->salvar();
                break;
                case "EXCLUIR":
                $id = isset($_GET['id']) ? $_GET['id'] : null;
                //$this->excluir($id);
                break;
                case "LISTAR":
                $id = isset($_GET['id']) ? $_GET['id'] : null;
               // $this->listar($id);
                break;
                
                default:
               // echo "<b>[WARNING] A ação solicitada não é reconhecida</b>";
                        }

    }  

     $this->limpaGets();  

    }
   protected function limpaGets()
    {
        if(isset($_GET['acao']))
        {
            unset($_GET['acao']);
        }

        if(isset($_GET['id']))
       {
        unset($_GET['id']);
       } 
    }


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
