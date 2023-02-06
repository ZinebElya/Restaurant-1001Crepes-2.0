<?php
//inclur la bibliothèque MySQLi
include_once("mysqli_connect.php");


//la méthode query pour exécuter des requêtes SQL
$result_message = $mysqli->query("SELECT * FROM clients_messages");


// vérifier si la requête a réussi en utilisant la méthode num_rows
if ($result_message->num_rows > 0) {
while ($row = $result_message->fetch_assoc()) {   ////parcourir les résultats de la requête

    echo "id: " .$row["id"]. " - Date: " .$row["Date"]. " - Prenom: " . $row["Prenom"]. " - Nom: " . $row["Nom"]. " - Email: " . $row["Email"]. " - Sujet: " . $row["Sujet"].  " - Message: " . $row["Message"]. "<br>";
}        
} else {
    echo "Aucun résultat trouvé.";
}

?>