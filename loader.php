<?php
//Autoloader classes
require_once "./config/config.php";
require_once "./config/ConnectionFactory.php";

require_once "./repository/GenericRepository.php"; 
require_once "./repository/ProblemaRepository.php";
require_once "./repository/categoriaRepository.php";
require_once "./repository/administradorRepository.php";
require_once "./repository/buscaRepository.php";
require_once "./repository/estatisticaRepository.php";
require_once "./repository/palavraChaveRepository.php";
require_once "./repository/papelRepository.php";
require_once "./repository/solucaoRepository.php";
require_once "./repository/subcategoriaRepository.php";
require_once "./repository/usuarioRepository.php";


require_once "./controller/GenericController.php";
require_once "./controller/CategoriaController.php";
require_once "./controller/usuarioController.php";
require_once "./controller/problemaController.php";
require_once "./controller/solucaoController.php";
require_once "./controller/AdministradorController.php";
require_once "./controller/BuscaController.php";
require_once "./controller/estatisticasController.php";
require_once "./controller/palavraChaveController.php";
require_once "./controller/palavraChaveProblemasController.php";
require_once "./controller/palavraChaveSolucoesController.php";
require_once "./controller/papelController.php";
require_once "./controller/subcategoriaController.php";
require_once "./controller/requestHandler.php";


require_once "./model/categorias.php";
require_once "./model/usuarios.php";
require_once "./model/problemas.php";
require_once "./model/solucao.php";
require_once "./model/administrador.php";
require_once "./model/buscas.php";
require_once "./model/estatisticas.php";
require_once "./model/palavrasChave.php";
require_once "./model/palavrasChaveProblemas.php";
require_once "./model/palavrasChaveSolucoes.php";
require_once "./model/papeis.php";
require_once "./model/subcategorias.php";


$repository = new ProblemaRepository();

$list = $repository->findAll();


if ($list) {
    while($linha = mysqli_fetch_array($list)) {


        echo "LINHA ->" . print_r($linha) . "<br>";
    }

}