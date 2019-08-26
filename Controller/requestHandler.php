
<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

defined('BASE_PATH') or define('BASE_PATH', $_SERVER['DOCUMENT_ROOT'] . "/help-desk");
set_include_path(BASE_PATH);


echo BASE_PATH;
require_once "../loader.php";

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
