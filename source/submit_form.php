<?php
// vérifie que les données proviennent bien d'un formulaire 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    //variables du formulaire

      /* "trim" pour enlever les espaces en début et fin de chaîne de caractères*/
    $prenom = trim(filter_input(INPUT_POST, 'prenom', FILTER_SANITIZE_STRING));
    $nom = trim(filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_STRING));
    $email = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL));
    $sujet = trim(filter_input(INPUT_POST, 'sujet', FILTER_SANITIZE_STRING));
    $message = trim(filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING));

  
    include_once("mysqli_connect.php");

    //préparer la requête d'insertion SQL
        //La méthode prepare() de l'objet $mysqli est utilisée pour préparer la requête SQL
    $statement = $mysqli->prepare("INSERT INTO clients_messages (Prenom, Nom, Email, Sujet, Message ) VALUES(?, ?, ?, ?, ?)");
        /*Le caractère "?" est un paramètre à ligaturer. 
        Ils sont utilisés pour insérer les valeurs dans la requête SQL. 
        Cela aide à protéger contre les attaques par injection SQL en échappant les données entrées par l'utilisateur. */

    //Associer les valeurs
    $statement->bind_param('sssss', $prenom, $nom, $email, $sujet, $message);
        // "bind_param" permet d'associer des valeurs à des marqueurs( c les ?) dans une requête préparée (ici "INSERT INTO").
        // 's' est un type de données qui indique que les ? sont des chaînes de caractères.

    //la méthode execute() est utilisée pour exécuter la requête d'insertion avec les valeurs associées.
    if($statement->execute()){
        include 'message_envoye.php';
       header("Location: message_envoye.php");
        }else{
            print $mysqli->error; 
        } 
  }
?>
