<?php
// Connexion à la base de données
$host = "host_name";
$user = "user_name";
$password = "password";
$dbname = "database_name";

$conn = mysqli_connect($host, $user, $password, $dbname);

// Requête SQL pour récupérer les informations sur les produits
$sql = "SELECT categorie, nom_produit, prix FROM produits";
$result = mysqli_query($conn, $sql);

// Tableau pour stocker les informations sur les produits
$products = array();
while ($row = mysqli_fetch_assoc($result)) {
    $products[] = $row;
}

// Fermeture de la connexion à la base de données
mysqli_close($conn);

// Génération du code HTML pour afficher le menu
$current_categorie = '';
$i = 1;
foreach ($products as $product) {
    if ($product['categorie'] != $current_categorie) {
        if ($current_categorie != '') {
            echo '</div></div></div>';
        }
        echo '<div class="card">
                <div class="card-header" id="heading' . $i . '">
                  <h2 class="mb-0">
                    <button class="btn text-warning font-weight-bold" type="button" data-toggle="collapse" data-target="#collapse' . $i . '" aria-expanded="false" aria-controls="collapse' . $i . '">
                    ' . $product['categorie'] . '
                    </button>
                  </h2>
                </div>
                <div id="collapse' . $i . '" class="collapse" aria-labelledby="heading' . $i . '" data-parent="#accordionExample">
                  <div class="card-body">
                    <ul class="list-group list-group-flush">';
        $current_categorie = $product['categorie'];
        $i++;
    }
    echo '<li class="list-group-item">
            <div class="d-flex justify-content-between align-items-center">
              <span>' . $product['nom_produit'] . '</span> 
              <span class="badge badge-warning badge-pill">' . $product['prix'] . '€</span>
            </div>
          </li>';
}
echo '</ul></div></div></div>';
?>
