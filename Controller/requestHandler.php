
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
    case "/Categoria":
     new CategoriaController();
     break;

     case "/Usuario":
     new usuarioController();
     break;
     
     case "/problema":
     
     new problemaController();
     break;

     case "/solucao":
     new solucaoController();

   }
 }
}


$ctrl = new Router();
