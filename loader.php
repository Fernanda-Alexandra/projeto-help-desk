<?php
//Autoloader classes
require_once "config/config.php";
require_once "config/ConnectionFactory.php";

require_once "Repository/GenericRepository.php"; 
require_once "Repository/ProblemaRepository.php"; 


$repository = new ProblemaRepository();

$list = $repository->findAll();


if ($list) {
    while($linha = mysqli_fetch_array($list)) {


        echo "LINHA ->" . print_r($linha) . "<br>";
    }

}