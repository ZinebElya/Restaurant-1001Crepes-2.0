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

<section>
<h2 class="text-warning text-center my-5"> Modification de produit </h2>
<div class="d-flex  flex-column  align-items-center border rounded border-warning p-1">
<div class="d-flex justify-content-center  border border-warning p-1 border-opacity-50 rounded-pill w-75 bg-warning mt-4">
<form method="POST" action=""> 
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
<input type="submit" name="ajouter" value="ajouter les modif" class="btn btn-warning">
</form>
</div>
</div>
</section>
