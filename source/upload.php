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
        $query = "INSERT INTO galerie (FILE, file_name, extension, file_path ) VALUES (?, ?, ?, ?)";
        $stmt = $mysqli->prepare($query);
        $stmt->bind_param("ssss", $file_name, $file_base_name, $file_extension, $file_path);
        $stmt->execute();

        // Vérification de la réussite de la requête d'insertion
        if ($stmt->affected_rows > 0) {
            include("navbar_backoffice.php");
            echo "
  <div class='container my-5 w-50'>
    <div class='card m-5 p-5'>
      <div class='card-body m5 p-5 font-weight-bold'>
        <p class='card-text text-center'> L'image a été téléchargée avec succès. <br>
        <a href='" . $file_path . "' target='_blank'>Aperçu</a></p>
      </div>
    </div>
  </div>
";
        } else {
            include("navbar_backoffice.php");
            echo "
  <div class='container my-5 w-50'>
    <div class='card m-5 p-5'>
      <div class='card-body m5 p-5 font-weight-bold'>
        <p class='card-text text-center'> Une erreur est survenue lors de l'insertion des données.</p>
      </div>
    </div>
  </div>
";
        }
    } else {
        echo "
  <div class='container my-5 w-50'>
    <div class='card m-5 p-5'>
      <div class='card-body m5 p-5 font-weight-bold'>
        <p class='card-text text-center'> Une erreur est survenue lors du téléchargement de l'image..</p>
      </div>
    </div>
  </div>
";
    }
}
?>