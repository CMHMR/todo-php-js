<?php

	include_once('../DB/conexion.php');

	$id = $_GET['id'];

	$query = "DELETE FROM tareas WHERE id=(?)";
	$stmt = $pdo->prepare($query);
	$stmt->execute(array($id));

	echo json_encode(true);
