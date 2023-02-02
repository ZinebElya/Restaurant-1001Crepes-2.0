<?php
include_once("mysqli_connect.php");

// Récupération de l'ID à supprimer
$id = $_GET['id'];

// Préparation de la requête de suppression
$stmt = $mysqli->prepare("DELETE FROM clients_messages WHERE id = ?");

// Liaison des paramètres et exécution de la requête
$stmt->bind_param("i", $id);
$stmt->execute();

// Redirection vers la page précédente
header("Location: backoffice.php");

?>




