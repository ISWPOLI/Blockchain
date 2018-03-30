
<!DOCTYPE html>
<html>
<head>
	<title>Publica</title>
	<link rel="stylesheet" type="text/css" href="estilos/estilos.css">
</head>
<body>
	<?php require 'parciales/header.php' ?>

	<?php if (!empty($message)): ?>
		<p><?= $message ?></p>
	<?php endif ?>

	<h1>Publica un anuncio de adopción</h1>

	<center>
		<div class="datos-publicacion">
			<form action="publicar.php" method="post">
				<input type="text" name="raza" placeholder="Raza:">
				<input type="text" name="edad" placeholder="Edad:">
				<input type="text" name="vacunas" placeholder="Vacunas al dia: Si/No">
				<input type="text" name="ciudad" placeholder="Ciudad:">
				<input type="text" name="barrio" placeholder="Barrio:">
				<input type="text" name="cuidados" placeholder="Cuidados: ">
				<textarea name="incluye" placeholder="Incluye: alimento, cama, mantas, etc"></textarea>
				<input type="submit" value="Publicar">
			</form>
		</div>
	</center>
</body>
</html>
