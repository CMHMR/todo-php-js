<?php
 
	include_once("../DB/conexion.php");

	$name = $_POST['name'];
	$description = $_POST['description'];

	if ($name === '') {
		echo json_encode(false);
	}else{

		$query = 'INSERT INTO tareas (name,description) VALUES (?, ?)';
		$stmt = $pdo->prepare($query);
		$stmt->execute(array($name,$description));

		echo json_encode(true);
	}