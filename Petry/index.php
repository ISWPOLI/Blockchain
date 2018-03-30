<?php
	session_start();
	require 'database.php';

	if (isset($_SESSION['user_id'])) {
		$records = $conn->prepare('SELECT id, email, password FROM users WHERE id = :id');
		$records->bindParam(':id', $_SESSION['user_id']);
		$records->execute();
		$results = $records->fetch(PDO::FETCH_ASSOC);

		$user = null;

		if (count($results)>0) {
			$user = $results;
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Bienvenido a PETRY</title>
	<link rel="stylesheet" type="text/css" href="estilos/estilos.css">
</head>
<body>

	<?php require 'parciales/header.php' ?>

	<?php if (!empty($user)): ?>
		<br>Bienvenido. <?= $user['email'] ?>
		<br>Has iniciado sesion correctamente.
		<a href="logout.php">Logout</a>
	<?php else: ?>
		<h1>Inicia sesión o registrate</h1>
		<a href="login.php">Inicia sesión</a>
		<a href="registro.php">Registrate</a>
	<?php endif; ?>
</body>
</html>