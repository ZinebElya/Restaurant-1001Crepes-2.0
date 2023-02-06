<?php
include_once("mysqli_connect.php");

// Requête pour récupérer les informations du menu
$result_menu = $mysqli->query("SELECT * FROM menu");

if ($result_menu->num_rows > 0) {
  echo '<section>';
  echo '  <div class="card">';
  echo '    <div class="card-header" id="headingOne">';
  echo '      <h2 class="mb-0">';
  echo '        <button class="btn text-warning font-weight-bold" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">';
  echo '        Crêpes salées';
  echo '        </button>';
  echo '      </h2>';
  echo '    </div>';
  echo '    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">';
  echo '      <div class="card-body">';
  echo '        <ul class="list-group list-group-flush">';
  while($row = $result_menu->fetch_assoc()) {
    echo '          <li class="list-group-item">';
    echo '            <div class="d-flex justify-content-between align-items-center">';
    echo '              <span>' . $row['titre'] . '</span> ';
    echo '              <span class="badge badge-warning badge-pill">' . $row['prix'] . '€</span>';
    echo '            </div>';
    echo '          </li>';
  }
  echo '        </ul>';                
  echo '      </div>';
  echo '    </div>';
  echo '  </div>';
  echo '</section>';
}
$mysqli->close();
?>