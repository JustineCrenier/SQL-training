<?php

	require 'conn.php';

	if (isset($_POST['delete'])) {
		
		try
		{
    		$bdd->beginTransaction();

    		$push = $bdd->prepare("
    			DELETE FROM todo 
    			WHERE id = :id
    		");

    		foreach ($_POST as $value) {
    			$push->execute(array(':id' => $value));
    		}

    		$push->closeCursor();

    		$bdd->commit();

		} catch(Exception $e) {
    
    		echo 'Erreur : ' . $e->getMessage();
    		$bdd->rollback();
		}

	}elseif (isset($_POST['archive'])) {
		try
		{
    		$bdd->beginTransaction();

    		$push = $bdd->prepare("
    			UPDATE todo
    			SET statut = 1 
    			WHERE id = :id 
    		");

    		foreach ($_POST as $value) {
    			$push->execute(array(':id' => $value));
    		}

    		$push->closeCursor();

    		$bdd->commit();

		} catch(Exception $e) {
    
    		echo 'Erreur : ' . $e->getMessage();
    		$bdd->rollback();
		}
	}

	header('Location: ../index.php');