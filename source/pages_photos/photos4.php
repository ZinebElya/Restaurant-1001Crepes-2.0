<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
          <div class="col-12 col-lg-4">
            <img src= "./images/ingredient 2.jpg" alt="ingredients"  class="d-block w-100 my-5">
          </div>
          <div class="col-12 col-lg-4">
            <img src="./images/crêpe sur une plaque de cuisson.jpg" alt="crêpe sur une plaque de cuisson" class="d-block w-100 my-5">
          </div>
          <div class="col-12 col-lg-4">
            <img src="./images/sarrasin.jpg" alt="sarrasin" class="d-block w-100 my-5">
          </div>
        </div>
      </div>
    </section>

    <section>
          <ul class="pagination justify-content-center my-5">
            <li class="page-item"><a class="page-link border border-warning bg-warning text-white" href="./photos3.php">Previous</a></li>
            <li class="page-item "><a class="page-link border border-warning text-warning " href="./photos.php">1</a></li>
            <li class="page-item "><a class="page-link border border-warning text-warning" href="./photos2.php">2</a></li>
            <li class="page-item "><a class="page-link border border-warning  text-warning" href="./photos3.php">3</a></li>
            <li class="page-item active"><a class="page-link border border-warning  text-warning" href="./photos4.php">4</a></li>
            <li class="page-item"><a class="page-link border border-warning bg-warning text-white" href="#" disabled>Next</a></li>
          </ul>
    </section>
    <?php include("footer.php"); ?>
 
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>