<?php
// Vérification de la soumission du formulaire
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Connexion à la base de données
    include_once("mysqli_connect.php");
  
    // Définition du répertoire d'upload
    $upload_dir = 'upload/';

    // Récupération des informations du formulaire
    $file_name = basename($_FILES['file']['name']);
    $file_path = $upload_dir . $file_name;
   // $legende = $_POST['legende'];

    // séparer le nom du fichier de son extension avec la fonction pathinfo()
    $file_info = pathinfo($file_name);
    $file_base_name = $file_info['filename'];
    $file_extension = $file_info['extension'];


    // Déplacement du fichier vers le répertoire d'upload
    if (move_uploaded_file($_FILES['file']['tmp_name'], $file_path)) {
        // Insertion des informations dans la table "galerie"
        $query = "INSERT INTO galerie (FILE, file_name, extension) VALUES (?, ?, ?)";
        $stmt = $mysqli->prepare($query);
        $stmt->bind_param("sss", $file_name, $file_base_name, $file_extension);
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