<?php

include_once("mysqli_connect.php");

$result_menu = $mysqli->query("SELECT * FROM menu");

if ($result_menu->num_rows > 0) {
    while ($row = $result_menu->fetch_assoc()) {  
    
        echo "ID: " .$row["id"]. " - Catégorie: " .$row["categorie"]. " - Produit: " . $row["nom_produit"]. " - Prix: " . $row["prix"]. "<br>";
    }        
    } else {
        echo "Aucun résultat trouvé.";
    }
?>


<?php
    include_once("mysqli_connect.php");
    $result_menu = $mysqli->query("SELECT * FROM menu");

    // Tableau pour stocker les informations sur les produits
    $products = array();
    while ($row = $result_menu->fetch_assoc()) {  
     $products[] = $row;
    }

    // Génération du code HTML pour afficher le menu
echo '<ul>';
$current_categorie = '';
foreach ($products as $product) {
    if ($product['categorie'] != $current_categorie) {
        if ($current_categorie != '') {
            echo '</ul></li>';
        }
        echo '<li><bouton>' . $product['categorie'] . '</bouton><ul>';
        $current_categorie = $product['categorie'];
    }
    echo '<li><span>' . $product['nom_produit'] . '</span><span>' . $product['prix'] . '</span></li>';
}
echo '</ul></li></ul>';






?>