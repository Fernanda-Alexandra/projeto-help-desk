
<?php



defined('BASE_PATH') or define('BASE_PATH', $_SERVER['DOCUMENT_ROOT'] . "/projeto-help-desk");
require_once BASE_PATH . "/loader.php";

final class Router
{
  function __construct() 
  {


    $this->redirect();

  } 
  
  private function redirect()
  {
   $uri =  isset($_SERVER['PATH_INFO']) ? $_SERVER['PATH_INFO'] : '';

   switch($uri)
   {
    case "/categoria":
     new CategoriaController();
     break;

     case "/usuario":
     new UsuarioController();
     break;
     
     case "/problema":
     
     new ProblemaController();
     break;

     case "/solucao":
     new SolucaoController();

   }
 }
}


$ctrl = new Router();
