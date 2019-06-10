<!DOCTYPE HTML>
<html lang="pt_BR">
<head>
     <meta charset="UTF-8">
	 <title>PHP com MySQLi</title>
</head>


<body>

      <?php

		ini_set('display_errors', 1);
		ini_set('display_startup_errors', 1);
		error_reporting(E_ALL);
	  
	    require 'config.php';
		require 'ConnectionFactory.php';
		
	      $link = DBConnetion();
		  
		
	  ?>
Página Inicial
</body>
</html>	  