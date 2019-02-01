<?php

	require 'conn.php';

	$resultat = $bdd->query('SELECT * FROM todo');

	while ($donnees = $resultat->fetch())
	{
 		$tache .= '<div><input type="checkbox" name="'.$donnees['id'].'"><label for="'.$donnees['id'].'">'.$donnees['id'].' | '.$donnees['tache'].'</label></div>';
	}

	$resultat->closeCursor();

