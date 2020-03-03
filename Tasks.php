<?php 

	include_once("conexion.php");

	$query = "SELECT * FROM tareas";

	$stmt = $pdo->prepare($query);
	$stmt->execute();

	$result = $stmt->fetchAll(PDO::FETCH_CLASS);

	echo json_encode($result);

