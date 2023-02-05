<?php
include_once("mysqli_connect.php"); 
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://kit.fontawesome.com/f18291f973.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>Back Office</title>
</head>

<body id="bg1">
  
<nav class="navbar navbar-expand-xxl p-0 navbar-light bg-white shadow ">
    <div class="container-fluid ">
      <a class="navbar-brand mx-0" href="./index.html"> <img src="./images/logo 1001crepes.png" width="100" height="100" alt="logo crepes"></a>
      <a href="resto_backoffice.php"><h1 class="text-warning text-center  mb-5">Back Office</h1></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-between " id="navbarNavDropdown">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item mx-lg-5 font-weight-bold">
            <a class="nav-link text-warning" href="./index.html">Accueil <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item mx-lg-5 font-weight-bold">
            <a class="nav-link text-warning" href="./menu.html">Menu</a>
          </li>
          <li class="nav-item mx-lg-5 font-weight-bold">
            <a class="nav-link text-warning" href="./photos.html">Photos</a>
          </li>
          <li class="nav-item mx-lg-5 font-weight-bold">
            <a class="nav-link text-warning" href="./apropos.html">A propos</a>
          </li>
          <li class="nav-item mx-lg-5 font-weight-bold">
            <a class="nav-link text-warning" href="./contact.html">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container my-3 bg-white ">

    <div class="accordion my-5" id="accordionExample">

    <section>
      <ul class="list-group list-group-horizontal justify-content-center my-5">
        <li class="list-group-item"  style="border:0;" >
          <button class="btn btn-warning text-white font-weight-bold" type="button" data-toggle="collapse" data-target="#collapseMessage" aria-expanded="false" aria-controls="collapseMessage">
            Messages
          </button>
        </li>
        <li class="list-group-item"  style="border:0;" >
          <button class="btn btn-warning text-white font-weight-bold" type="button" data-toggle="collapse" data-target="#collapseGuestbook" aria-expanded="false" aria-controls="collapseGuestbook">
          Guest book
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

        <h1 class="text-warning text-center">  Messages </h1>

        <table class="table table-striped">
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
$result = $mysqli->query("SELECT * FROM clients_messages");

    // vérifier si la requête a réussi en utilisant la méthode num_rows
      if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {   ////parcourir les résultats de la requête
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
      <div class="collapse" id="collapseGuestbook" data-parent="#accordionExample">
        <h1 class="text-warning text-center my-5"> Guest book </h1>
      </div>
    </section>

    <section>
      <div class="collapse" id="collapseGalerie" data-parent="#accordionExample">
      
      <h1 class="text-warning text-center"> Galerie  </h1>

      <div class="d-flex  flex-wrap justify-content-center border rounded border-warning p-1">
      <div class="border border-warning p-1 border-opacity-50 rounded-pill w-50">
        <form action="upload.php" method="post" enctype="multipart/form-data" class="text-center">
          <div>
            <label for="file"></label>
            <input type="file" id="file" name="file" class=" w-100">
            </div>
          <button type="submit" class="btn btn-warning" name="upload">Soumettre</button>
        </form>
      </div>

      <div class="my-5">
        <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Date</th>
            <th scope="col">Nom du fichier</th>
            <th scope="col">Légende</th>
            <th scope="col">Aperçu</th>
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