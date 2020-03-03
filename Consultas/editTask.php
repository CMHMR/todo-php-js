<?php 
	
	include_once("../DB/conexion.php");

	$id = $_GET['id'];
	$status = $_GET['status'];
	
	if ($status == 0) {
		$query = "UPDATE tareas SET status=1 WHERE id=(?)";
		$stmt = $pdo->prepare($query);
		$stmt->execute(array($id));
	} else {
		$query = "UPDATE tareas SET status=0 WHERE id=(?)";
		$stmt = $pdo->prepare($query);
		$stmt->execute(array($id));
	}

	echo json_encode(true);