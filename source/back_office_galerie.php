<?php
//inclur la bibliothèque MySQLi
include_once("mysqli_connect.php");


//la méthode query pour exécuter des requêtes SQL
$result_galerie = $mysqli->query("SELECT * FROM galerie");


// vérifier si la requête a réussi en utilisant la méthode num_rows
if ($result_galerie->num_rows > 0) {
while ($row = $result_galerie->fetch_assoc()) {   ////parcourir les résultats de la requête

    echo "id: " .$row["id"]. " - Date: " .$row["date"]. " - File Name: " . $row["file_name"]. " - Legende: " . $row["legende"]. "<br>";
}        
} else {
    echo "Aucun résultat trouvé.";
}

?>