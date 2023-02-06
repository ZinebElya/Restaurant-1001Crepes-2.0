<?php

include_once("mysqli_connect.php");

// Requête pour récupérer les informations du menu
$result_menu = $mysqli->query("SELECT * FROM menu");

if ($result_menu->num_rows > 0) {
    while ($row = $result_menu->fetch_assoc()) {  
    
        echo "ID: " .$row["id"]. " - Catégorie: " .$row["categorie"]. " - Titre: " . $row["titre"]. " - Prix: " . $row["prix"]. "<br>";
    }        
    } else {
        echo "Aucun résultat trouvé.";
    }
?>
