<?php
	
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=weatherapp', 'root', 'root');
	}
	catch(Exception $e)
	{
		$bdd->Rollback();
       	echo 'Erreur : ' . $e->getMessage();
	}

	$resultat = $bdd->query('SELECT * FROM météo');