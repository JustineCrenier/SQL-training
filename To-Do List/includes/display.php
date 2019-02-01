<?php

	require 'conn.php';

	//afficher tache encore à réaliser

	$resultat = $bdd->query('SELECT * FROM todo WHERE statut = 0');

	while ($donnees = $resultat->fetch())
	{
 		$tache .= '<div><input type="checkbox" id="'.$donnees['id'].'" name="'.$donnees['id'].'"" value="'.$donnees['id'].'"><label for="'.$donnees['id'].'">'.$donnees['id'].' | '.$donnees['tache'].'</label></div>';
	}

	$resultat->closeCursor();

	//afficher archive

	$resultat = $bdd->query('SELECT * FROM todo WHERE statut = 1');
	while($donnees = $resultat->fetch())
	{
		$archive = '<div><input type="checkbox" id="'.$donnees['id'].'" name="'.$donnees['id'].'"" value="'.$donnees['id'].'"><label for="'.$donnees['id'].'" class="archive">'.$donnees['id'].' | '.$donnees['tache'].'</label></div>';
	}

	$resultat->closeCursor();

