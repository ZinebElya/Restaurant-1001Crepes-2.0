<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $categorie = trim(filter_input(INPUT_POST, 'categorie', FILTER_SANITIZE_STRING));
    $nom_produit = trim(filter_input(INPUT_POST, 'nom_produit', FILTER_SANITIZE_STRING));
    $prix = trim(filter_input(INPUT_POST, 'prix', FILTER_VALIDATE_FLOAT));

  
    include_once("mysqli_connect.php");

    $statement = $mysqli->prepare("INSERT INTO menu (categorie, nom_produit, prix ) VALUES(?, ?, ?)");
       
    $statement->bind_param('sss', $categorie, $nom_produit, $prix);
   
    if($statement->execute()){
      echo "Produit ajouté au menu";
        }else{
            print $mysqli->error; 
        } 
  }
?>
