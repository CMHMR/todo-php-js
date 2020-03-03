<?php 
	
	$db = 'mysql:host=localhost; dbname=php-ajax';
	$user = 'root';
	$pass = '';

	try {

		$pdo = new PDO($db, $user, $pass);

		//echo "Conectado exitosamente";
		
	}catch (PDOException $e){
		print "Error". $e->getMessage()."<br/>";
		die();
	}
