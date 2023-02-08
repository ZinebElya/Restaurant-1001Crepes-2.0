<?php

include_once("mysqli_connect.php");

// Récupération de l'ID à supprimer
$id = $_GET['id'];

// Récupération du nom de la table à partir de laquelle supprimer
$table = $_GET['table'];

// Préparation de la requête de suppression en fonction de la table
$stmt = $mysqli->prepare("DELETE FROM $table WHERE id = ?");

// Liaison des paramètres et exécution de la requête
$stmt->bind_param("i", $id);
$stmt->execute();

// Redirection vers la page précédente
header("Location: backoffice.php");

?>



