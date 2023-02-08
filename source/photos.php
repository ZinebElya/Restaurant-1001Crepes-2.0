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

  <title>Photos</title>
</head>
<body id="bg1">
<?php include("navbar.php"); ?>

  <div class="container my-5">
    <h1 class="bg-warning text-white text-center"> PHOTOS </h1>
  </div>
  <section>
  <div class="gallery justify-content-center d-flex my-5">
    <div class="row">
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

    </div>
    </div>
    </section>

    <section id="pagination">
  <ul class="pagination justify-content-center my-5">
    <li class="page-item <?php echo $page <= 1 ? 'disabled' : ''; ?>"><a class="page-link border border-warning bg-warning text-white" href="?page=<?php echo $page - 1; ?>">Previous</a></li>
    <?php for ($i = 1; $i <= $numberOfPages; $i++): ?>
      <li class="page-item <?php echo $page == $i ? 'active' : ''; ?>">
        <a class="page-link border border-warning text-warning" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
      </li>
    <?php endfor; ?>
    <li class="page-item <?php echo $page >= $numberOfPages ? 'disabled' : ''; ?>"><a class="page-link border border-warning bg-warning text-white" href="?page=<?php echo $page + 1; ?>">Next</a></li>
  </ul>
</section>


<?php include("footer.php"); ?>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>