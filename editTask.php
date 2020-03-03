<?php 
	
	include_once("conexion.php");

	$query = "UPDATE tareas SET status=? WHERE id=?";
	$stmt = $pdo->prepare($query);
	$stmt->execute(array($status, $id));
