<?php
include_once("mysqli_connect.php"); 
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
  
  <div class="container my-1 bg-white">

    <div class="accordion" id="accordionExample">

    <section>
      <ul class="list-group list-group-horizontal justify-content-center my-3">
        <li class="list-group-item"  style="border:0;" >
          <button class="btn btn-warning text-white font-weight-bold" type="button" data-toggle="collapse" data-target="#collapseMessage" aria-expanded="false" aria-controls="collapseMessage">
            Messages
          </button>
        </li>
        <li class="list-group-item"  style="border:0;" >
          <button class="btn btn-warning text-white font-weight-bold" type="button" data-toggle="collapse" data-target="#collapseMenu" aria-expanded="false" aria-controls="collapseMenu">
          Menu
          </button>
        </li>
        <li class="list-group-item"  style="border:0;">
          <button class="btn btn-warning text-white font-weight-bold" type="button" data-toggle="collapse" data-target="#collapseGalerie" aria-expanded="false" aria-controls="collapseGalerie">
            Galerie 
          </button>
        </li>
      </ul>
    </section>

    <section>
      <div class="collapse mb-5" id="collapseMessage" data-parent="#accordionExample">

        <h2 class="text-warning text-center">  Messages des clients  </h2>

        <table class="table table-striped table-warning my-5">
        <thead>
          <tr>
          <th scope="col">ID</th>
            <th scope="col">Date</th>
            <th scope="col">Prenom</th>
            <th scope="col">Nom</th>
            <th scope="col">Email</th>
            <th scope="col">Sujet</th>
            <th scope="col">Message</th>
            <th scope="col">Supprimer</th>
          </tr>
        </thead>
        <tbody>
          
    <?php
    //la méthode query pour exécuter des requêtes SQL
    $result_message = $mysqli->query("SELECT * FROM clients_messages");

    // vérifier si la requête a réussi en utilisant la méthode num_rows
      if ($result_message->num_rows > 0) {
          while ($row = $result_message->fetch_assoc()) {   ////parcourir les résultats de la requête
            echo "<tr>";
            echo "<th scope='row'>".$row['id']."</th>";
            echo "<td>". $row['Date']. "</td>";
            echo "<td>". $row['Prenom']. "</td>";
            echo "<td>" . $row['Nom']. "</td>";
            echo "<td>". $row['Email']. "</td>";
            echo "<td>". $row['Sujet']. "</td>";
            echo "<td>". $row['Message']. "</td>";
            echo "<td><a href='delete.php?id=".$row['id']."&table=clients_messages' class='btn btn-danger'>X</a></td>";
            echo "</tr>";
          }
      } else {
        echo "Aucun résultat trouvé.";
      }
      ?>
        </tbody>
      </table>
      </div>
    </section>

    <section>
      <div class="collapse" id="collapseMenu" data-parent="#accordionExample">
        <h2 class="text-warning text-center my-5"> Menu </h2>

        <div class="d-flex  flex-column  align-items-center border rounded border-warning p-1">
      <div class="d-flex justify-content-center  border border-warning p-1 border-opacity-50 rounded-pill w-75 bg-warning mt-4">
        <form method="POST" action="submit_menu.php" class="w-75 text-center">
        <div class="form-row">
          <div class="form-group col-md-4">
          <label for="categorie">Catégorie</label>
          </div>
          <div class="form-group col-md-8">
            <select class="form-select w-100" id="categorie" name="categorie" aria-label="select option">
                <option value='Crêpes salées'>Crêpes salées</option>
                <option value='Crêpes sucrées'>Crêpes sucrées</option>
                <option value='Milk-shakes'>Milk-shakes </option>
                <option value='Boissons chaudes'>Boissons chaudes</option>
            </select>
          </div>
        </div>
          
          <div class="form-row">  
          <div class="form-group col-md-4">    
          <label for="nom_produit">Nom du produit</label>
          </div>
          <div class="form-group col-md-8"> 
          <input type="text" id="nom" name="nom_produit" class="w-100" required>
          </div>
          </div>

          <div class="form-row">
          <div class="form-group col-md-4">
          <label for="prix">Prix</label>
          </div>
          <div class="form-group col-md-8">
          <input type="text" id="prix" name="prix" class="w-100" required>
          </div>
          </div>
          <input type="submit" name="ajouter" value="Ajouter" class="btn btn-light">
        </form>
        </div>

        <div class="my-5 w-100">
        <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">ID_Produit</th>
            <th scope="col">Catégorie</th>
            <th scope="col">Nom du Produit</th>
            <th scope="col">Prix</th>
            <th scope="col">Modifier</th>
            <th scope="col">Supprimer</th>
          </tr>
        </thead>
        <tbody>
        <?php
        include_once("mysqli_connect.php");

        $result_menu = $mysqli->query("SELECT * FROM menu");

        if ($result_menu->num_rows > 0) {
        while ($row = $result_menu->fetch_assoc()) {  
          echo "<tr>";
          echo "<th scope='row'>".$row['id']."</th>";
          echo "<td>". $row['categorie']. "</td>";
          echo "<td>". $row['nom_produit']. "</td>";
          echo "<td>" . $row['prix']. "</td>";
          echo "<td><a href='modif_menu.php?id=".$row['id']."&table=menu' class='btn btn-primary'>Modifier</a></td>";
          echo "<td><a href='delete.php?id=".$row['id']."&table=menu' class='btn btn-danger'>X</a></td>";
          echo "</tr>";
        }        
        } else {
           echo "Aucun résultat trouvé.";
        }
        ?>
        </tbody>
      </table>
        </div>
      </div>
      </div>
    </section>

    <section>
      <div class="collapse" id="collapseGalerie" data-parent="#accordionExample">
      
      <h2 class="text-warning text-center"> Galerie </h2>

      <div class="d-flex  flex-column  align-items-center border rounded border-warning p-1">
      <div class="d-flex justify-content-center  border border-warning p-1 border-opacity-50 rounded-pill w-50 bg-warning mt-4">
        <form action="upload.php" method="post" enctype="multipart/form-data" class="text-center">
          <div class="mb-3">
            <label for="file"></label>
            <input type="file" id="file" name="file" class=" w-100">
            </div>
          <button type="submit" class="btn btn-light" name="upload">Télécharger</button>
        </form>
      </div>

      <div class="my-5 w-100">
        <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Date</th>
            <th scope="col">Nom du fichier</th>
            <th scope="col">Légende</th>
            <th scope="col">Aperçu</th>
            <th scope="col">Ajouter</th>
            <th scope="col">Supprimer</th>
          </tr>
        </thead>
        <tbody>
          
    <?php
      //la méthode query pour exécuter des requêtes SQL
      $result_galerie = $mysqli->query("SELECT * FROM galerie");

      // vérifier si la requête a réussi en utilisant la méthode num_rows
      if ($result_galerie->num_rows > 0) {
        while ($row = $result_galerie->fetch_assoc()) {  //parcourir les résultats de la requête
            echo "<tr>";
            echo "<th scope='row'>".$row['id']."</th>";
            echo "<td>". $row['date']. "</td>";
            echo "<td>". $row['FILE']. "</td>";
            echo "<td>" . $row['file_name']. "</td>";
            echo "<td><a href='" . $row["file_path"]. "' target='_blank'><img src='upload/".$row['FILE']."' width='80' height='80'></a></td>";
            echo "<td><a href='pg2_photo.php?id=".$row['id']."&table=galerie&action=add' class='btn btn-primary'>Ajouter</a></td>";
            echo "<td><a href='delete.php?id=".$row['id']."&table=galerie' class='btn btn-danger'>X</a></td>";
            echo "</tr>";
          }
      } else {
        echo "Aucun résultat trouvé.";
      }
      ?>
        </tbody>
      </table>
    </div>
      </div>
      
      </div>
    </section>
    </div>
  
  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>