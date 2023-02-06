<?php
  // Définition des constantes pour la connexion à la base de données
  $host = "database"; 
  $username = "root"; 
  $userpassword = "root"; 
  $database = "resto_db"; 
  
  // Tentative de connexion à la base de données
  $mysqli = new mysqli($host, $username, $userpassword, $database);

  // Vérification de la connexion
  if ($mysqli->connect_error) {
        die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
       
    } 

  // Définir le jeu de caractères utf8 pour la connexion à la base de données
  $mysqli->set_charset("utf8");
    
?>