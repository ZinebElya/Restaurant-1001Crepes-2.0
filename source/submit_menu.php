<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $categorie = trim(filter_input(INPUT_POST, 'categorie', FILTER_SANITIZE_STRING));
    $nom_produit = trim(filter_input(INPUT_POST, 'nom_produit', FILTER_SANITIZE_STRING));
    $prix = trim(filter_input(INPUT_POST, 'prix', FILTER_VALIDATE_FLOAT));

  
    include_once("mysqli_connect.php");

    $statement = $mysqli->prepare("INSERT INTO menu (categorie, nom_produit, prix ) VALUES(?, ?, ?)");
       
    $statement->bind_param('sss', $categorie, $nom_produit, $prix);
   
    if($statement->execute()){
      include("navbar_backoffice.php");
      echo "
<div class='container my-5 w-50'>
<div class='card m-5 p-5'>
<div class='card-body m5 p-5 font-weight-bold'>
  <p class='card-text text-center'> Produit ajouté au menu</p>
</div>
</div>
</div>
";
      }else{
            print $mysqli->error; 
      } 
  }
?>
