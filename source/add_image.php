<?php
include_once("mysqli_connect.php"); 

$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$start = ($page - 1) * 3; // 3photos par page
$end = $start + 3;
$images = [];

// Récupérer les images depuis la base de données
$stmt = $mysqli->prepare("SELECT * FROM galerie");
$stmt->execute();
$result = $stmt->get_result();

while ($row = $result->fetch_assoc()) {
  $images[] = [$row['file_path'], $row['file_name']];
}

$stmt->close();
$mysqli->close();

// Ajouter les images du dossier local à l'array $images
$local_images = [         
  ["./images/crêpes aux épinards, saumon, avocat et cream cheese.jpg", "crêpes aux épinards, saumon, avocat et cream cheese"],
  ["./images/Crêpes salées au poulet et champignons de Paris.jpg", "Crêpes salées au poulet et champignons de Paris"],
  ["./images/Crêpes aux asperges, œuf mollet et sauce hollandaise.jpg", "Crêpes aux asperges, œuf mollet et sauce hollandaise"],

  ["./images/crêpes chocolat banane.jpg", "crêpes chocolat banane"],
  ["./images/Crêpes roulé à la confiture de baies fraîches.jpg", "Crêpes roulé à la confiture de baies fraîches"],
  ["./images/Crêpes à la fleur d'oranger.jpg", "Crêpes à la fleur d'oranger"],

  ["./images/milk-shake kiwi et menthe.jpg", "milk-shake kiwi et menthe"],
  ["./images/milk-shake fraise banane chocolat.jpg", "milk-shake fraise banane chocolat"],
  ["./images/Milk-shake banane agrumes.jpg", "Milk-shake banane agrumes"],

  ["./images/ingredient 2.jpg", "ingredients"],
  ["./images/crêpe sur une plaque de cuisson.jpg", "crêpe sur une plaque de cuisson"],
  ["./images/sarrasin.jpg", "sarrasin"]
];

$images = array_merge($local_images, $images);

for ($i = $start; $i < $end && $i < count($images); $i++) {
  echo '<div class="col-12 col-lg-4">
    <img src= "'.$images[$i][0].'" alt="'.$images[$i][1].'" class="d-block w-100 my-5">
  </div>';
}
$numberOfPages = ceil(count($images) / 3);
?>





