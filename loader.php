<?php
//Autoloader classes
//require_once "./Config/config.php";
require_once "Config/config.php";
require_once "Config/ConnectionFactory.php";

require_once "Repository/GenericRepository.php";
require_once "Repository/ProblemaRepository.php";
require_once "Repository/categoriaRepository.php";
require_once "Repository/administradorRepository.php";
require_once "Repository/buscaRepository.php";
require_once "Repository/estatisticaRepository.php";
require_once "Repository/palavraChaveRepository.php";
require_once "Repository/papelRepository.php";
require_once "Repository/solucaoRepository.php";
require_once "Repository/subcategoriaRepository.php";
require_once "Repository/usuarioRepository.php";


require_once "Controller/GenericController.php";
require_once "Controller/CategoriaController.php";
require_once "Controller/usuarioController.php";
require_once "Controller/problemaController.php";
require_once "Controller/solucaoController.php";
require_once "Controller/AdministradorController.php";
require_once "Controller/BuscaController.php";
require_once "Controller/estatisticasController.php";
require_once "Controller/palavraChaveController.php";
require_once "Controller/palavraChaveProblemasController.php";
require_once "Controller/palavraChaveSolucoesController.php";
require_once "Controller/papelController.php";
require_once "Controller/subcategoriaController.php";
require_once "Controller/requestHandler.php";


require_once "Model/categorias.php";
require_once "Model/usuarios.php";
require_once "Model/problemas.php";
require_once "Model/solucao.php";
require_once "Model/administrador.php";
require_once "Model/buscas.php";
require_once "Model/estatisticas.php";
require_once "Model/palavrasChave.php";
require_once "Model/palavrasChaveProblemas.php";
require_once "Model/palavrasChaveSolucoes.php";
require_once "Model/papeis.php";
require_once "Model/subcategorias.php";


$repository = new ProblemaRepository();

$list = $repository->findAll();


