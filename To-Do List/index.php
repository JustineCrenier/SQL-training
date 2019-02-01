<?php
	require 'includes/display.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>To-Do List</title>
	<link rel="stylesheet" href="assets/css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Sarabun" rel="stylesheet">
</head>
<body>
	<header>
		<h1>To-Do List</h1>
	</header>
	<main>
		<form action="includes/send.php" method="POST">
			<input type="text" placeholder="Ajouter une tache" class="tache" name="addTache">
			<input type="submit" value="Ajouter" class="submit">
		</form>
		<div class="todo">
			<h2>Vos tâches à réaliser</h2>
			<form action="#" method="POST">
				
				<?php echo $tache; ?>

				<input type="submit" value="Archiver" name="archive">
				<input type="submit" value="Supprimer" name="delete">
			</form>
		</div>
		<div class="archive">
			<h2>Vos tâches archivées</h2>
		</div>
	</main>
</body>
</html>