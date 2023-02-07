<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <script src="https://kit.fontawesome.com/f18291f973.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>Menu</title>
</head>

<body id="bg1" class="d-flex flex-column h-100 align-items-flex-end">

  <?php include("navbar.php"); ?>

  <div class="container my-5">

    <h1 class="bg-warning text-white text-center"> LE MENU </h1>

    <div class="accordion my-5" id="accordionExample">
  
    <?php
    include_once("mysqli_connect.php");
    $result_menu = $mysqli->query("SELECT * FROM menu");

    // Tableau pour stocker les informations sur les produits
    $products = array();
    while ($row = $result_menu->fetch_assoc()) {  
     $products[] = $row;
    }

// Génération du code HTML pour afficher le menu
$current_categorie = '';
$i = 1;
foreach ($products as $product) {
    if ($product['categorie'] != $current_categorie) {
        if ($current_categorie != '') {
            echo '</div></div></div>';
        }
        echo '<div class="card">
                <div class="card-header" id="heading' . $i . '">
                  <h2 class="mb-0">
                    <button class="btn text-warning font-weight-bold" type="button" data-toggle="collapse" data-target="#collapse' . $i . '" aria-expanded="false" aria-controls="collapse' . $i . '">
                    ' . $product['categorie'] . '
                    </button>
                  </h2>
                </div>
                <div id="collapse' . $i . '" class="collapse" aria-labelledby="heading' . $i . '" data-parent="#accordionExample">
                  <div class="card-body">
                    <ul class="list-group list-group-flush">';
        $current_categorie = $product['categorie'];
        $i++;
    }
    echo '<li class="list-group-item">
            <div class="d-flex justify-content-between align-items-center">
              <span>' . $product['nom_produit'] . '</span> 
              <span class="badge badge-warning badge-pill">' . $product['prix'] . '€</span>
            </div>
          </li>';
}
echo '</ul></div></div></div>';
?>
  </div>
    
  </div>
  <?php include("footer.php"); ?>

 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>