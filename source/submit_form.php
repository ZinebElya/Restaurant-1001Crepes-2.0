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
    /*
     //identifiants mysql
     $host = "database"; 
     $username = "root"; 
     $userpassword = "root"; 
     $database = "resto_db"; 
  

    //Ouvrir une nouvelle connexion au serveur MySQL
    $mysqli = new mysqli($host, $username, $userpassword, $database);
    //"mysqli" est une extension de PHP qui permet de travailler avec des bases de données MySQL.

    //Afficher toute erreur de connexion
      //La méthode connect_error de l'objet $mysqli est utilisée pour vérifier s'il y a une erreur de connexion.
    if ($mysqli->connect_error) {
        die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
        //Le message d'erreur final aura un format similaire à ceci: Error : (nombre) message d'erreur
    } */

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
        echo "<div class='sucess'>
            <h3>Bonjour $prenom</h3>
            <p> Votre message est envoyé.</p>
            <p>On vous répondra dans les plus bref délai.</p>
       </div>";
        }else{
            print $mysqli->error; 
        } 

  }

?>
