<?php
include_once("mysqli_connect.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = $mysqli->query("SELECT * FROM menu WHERE id = $id");
    $row = $result->fetch_assoc();
    $categorie = $row['categorie'];
    $nom_produit = $row['nom_produit'];
    $prix = $row['prix'];
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $categorie = trim(filter_input(INPUT_POST, 'categorie', FILTER_SANITIZE_STRING));
    $nom_produit = trim(filter_input(INPUT_POST, 'nom_produit', FILTER_SANITIZE_STRING));
    $prix = trim(filter_input(INPUT_POST, 'prix', FILTER_VALIDATE_FLOAT));

  
    include_once("mysqli_connect.php");

    $mysqli->query("UPDATE menu SET categorie='$categorie', nom_produit='$nom_produit', prix='$prix' WHERE id=$id");
       
   
    header("Location: resto_backoffice.php");
  }

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>Back Office</title>
</head>

<body id="bg1">
<?php include("navbar_backoffice.php"); ?>
  
  <div class="container my-5 bg-white">

    <section>
        <h2 class="text-warning text-center my-5"> Modification Menu </h2>

        <div class="d-flex  flex-column  align-items-center border rounded border-warning p-1 ">
      <div class="d-flex justify-content-center  border border-warning p-1 border-opacity-50 rounded-pill w-75 bg-warning my-5">
        <form method="POST" action="" class="w-75 text-center">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <div class="form-row">
          <div class="form-group col-md-4">
          <label for="categorie">Catégorie</label>
          </div>
          <div class="form-group col-md-8">
          <select class="form-select w-100" id="categorie" name="categorie" aria-label="select option">
            <option value='Crêpes salées' <?php if ($categorie == 'Crêpes salées') echo 'selected'; ?>>Crêpes salées</option>
            <option value='Crêpes sucrées' <?php if ($categorie == 'Crêpes sucrées') echo 'selected'; ?>>Crêpes sucrées</option>
            <option value='Milk-shakes' <?php if ($categorie == 'Milk-shakes') echo 'selected'; ?>>Milk-shakes </option>
            <option value='Boissons chaudes' <?php if ($categorie == 'Boissons chaudes') echo 'selected'; ?>>Boissons chaudes</option>
        </select>
          </div>
        </div>
          
          <div class="form-row">  
          <div class="form-group col-md-4">    
          <label for="nom_produit">Nom du produit</label>
          </div>
          <div class="form-group col-md-8"> 
          <input type="text" id="nom" name="nom_produit" value="<?php echo $nom_produit; ?>" class="w-100" required>
          </div>
          </div>

          <div class="form-row">
          <div class="form-group col-md-4">
          <label for="prix">Prix</label>
          </div>
          <div class="form-group col-md-8">
          <input type="text" id="prix" name="prix" value="<?php echo $prix; ?>" class="w-100" required>
          </div>
          </div>
          <input type="submit" name="ajouter" value="Modifier" class="btn btn-light">
        </form>
        </div>

       
      </div>
      </div>
    </section>

  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>