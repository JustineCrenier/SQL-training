<?php
    require 'conn.php';
try
{
    $bdd->beginTransaction();

    $push = $bdd->prepare("
        INSERT INTO todo 
            (tache) 
        VALUES 
            (:tache)
    ");

    $push->execute(array(':tache' => $_POST['addTache']));

    $push->closeCursor();

    $bdd->commit();

    echo "données ajoutées";

} catch(Exception $e) {
    
    echo 'Erreur : ' . $e->getMessage();
    $bdd->rollback();
}

header('Location: ../index.php');