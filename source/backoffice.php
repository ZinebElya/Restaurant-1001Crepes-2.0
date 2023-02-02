<?php
//inclur la bibliothèque MySQLi
include_once("mysqli_connect.php");


//la méthode query pour exécuter des requêtes SQL
$result = $mysqli->query("SELECT * FROM clients_messages");




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

<body>

  <nav class="navbar navbar-expand-md p-0 navbar-light bg-white shadow sticky-top">
      <a class="navbar-brand mx-5" href=""> <img src="./images/logo 1001crepes.png" width="100" height="100" alt="logo crepes"></a>
      <h2 class="text-warning font-weight-bold text-center mx-5">Back Office</h2>
  </nav>

  <div class="container my-5">

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
            echo "<td><a href='delete.php?id=".$row['id']."' class='btn btn-danger'>X</a></td>";
            echo "</tr>";
          }
      } else {
        echo "Aucun résultat trouvé.";
      }
      ?>

        </tbody>
      </table>

  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>