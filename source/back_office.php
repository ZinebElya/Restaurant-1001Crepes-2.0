<?php
//inclur la bibliothèque MySQLi
include_once("mysqli_connect.php");


//la méthode query pour exécuter des requêtes SQL
$result = $mysqli->query("SELECT * FROM clients_messages");


// vérifier si la requête a réussi en utilisant la méthode num_rows
if ($result->num_rows > 0) {
while ($row = $result->fetch_assoc()) {   ////parcourir les résultats de la requête

    echo "Date: " .$row["Date"]. " - Prenom: " . $row["Prenom"]. " - Nom: " . $row["Nom"]. " - Email: " . $row["Email"]. " - Message: " . $row["Message"]. "<br>";
}
} else {
    echo "Aucun résultat trouvé.";
}

?>