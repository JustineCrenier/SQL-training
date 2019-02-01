<?php
try
{
	// On se connecte à MySQL
	$bdd = new PDO('mysql:host=localhost;dbname=todolist;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
	// En cas d'erreur, on annule la transaction et on affiche l'erreur
	echo 'Erreur : ' . $e->getMessage();
	$bdd->Rollback();
}