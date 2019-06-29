
<?php

echo "HELLO WORLD";

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
            $action = $_GET["../Controller/CategoriaController.php"];

         break;

         case "/usuario":
            new usuarioController();
            $action = $_GET["../Controller/usuarioController.php"];
         break;
     
         case "/problema":
             new problemaController();
              $action = $_GET["../Controller/problemaController.php"];

          case "/solucao":
             new solucaoController();
              $action = $_GET["../Controller/solucaoController.php"];
 
          
      }
    }
}

$ctrl = new Router();
