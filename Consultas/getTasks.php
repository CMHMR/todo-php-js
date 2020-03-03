<?php 

	require_once("../DB/conexion.php");

	$dato = $_GET['search'];

	$query = "SELECT * FROM tareas WHERE name LIKE :name OR description LIKE :description";
	$stmt = $pdo->prepare($query);
	$stmt->execute(["name" => "%".$dato."%", "description" => "%".$dato."%"]);

	$result = $stmt->fetchAll(PDO::FETCH_CLASS);
	
	echo json_encode($result);