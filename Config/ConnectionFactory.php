<?php
	
	class ConnectionFactory
	{
		
		public static function getConnection(){
			return mysqli_connect(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
		
		   
			
		}
		
	}

   
