<?php
// Vérification de la soumission du formulaire
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Connexion à la base de données
    include_once("mysqli_connect.php");
  

    // Définition du répertoire d'upload
    $upload_dir = 'uploads/';

    // Récupération des informations du formulaire
    $file_name = basename($_FILES['file']['name']);
    $file_path = $upload_dir . $file_name;
    $legende = $_POST['legende'];

    // Déplacement du fichier vers le répertoire d'upload
    if (move_uploaded_file($_FILES['file']['tmp_name'], $file_path)) {
        // Insertion des informations dans la table "galerie"
        $query = "INSERT INTO galerie (file_name, legende) VALUES (?, ?)";
        $stmt = $mysqli->prepare($query);
        $stmt->bind_param("ss", $file_name, $legende);
        $stmt->execute();

        // Vérification de la réussite de la requête d'insertion
        if ($stmt->affected_rows > 0) {
            echo "L'image a été téléchargée avec succès.";
        } else {
            echo "Une erreur est survenue lors de l'insertion des données.";
        }
    } else {
        echo "Une erreur est survenue lors du téléchargement de l'image.";
    }
}
?>