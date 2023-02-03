<?php


if (isset($_POST['upload'])) {
    // Récupérer les valeurs envoyées à partir du formulaire
    $legende = $_POST['legende'];

include_once("mysqli_connect.php");

     // Vérifier si le fichier a été téléchargé avec succès
  if (isset($_FILES['file']['error']) && $_FILES['file']['error'] == 0) {

    // Récupération du nom du fichier
    $file_name = $_FILES['file']['name'];

    // Déplacement du fichier téléchargé vers le répertoire de stockage
    move_uploaded_file($_FILES['file']['tmp_name'], "uploads/" . $file_name);

    // Préparation de la requête d'insertion
    $sql = "INSERT INTO galerie (legende) VALUES ('$legende')";

    // Exécution de la requête
    if ($mysqli->query($sql) === TRUE) {
        echo "Image ajoutée avec succès.";
      } else {
        echo "Erreur lors de l'insertion de l'image : " . $mysqli->error;
      }
    } else {
      echo 'Le fichier n\'a pas été téléchargé correctement.';
    }

   
}



?>