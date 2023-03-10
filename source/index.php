<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://kit.fontawesome.com/f18291f973.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>Accueil</title>
</head>

<body id="bg1">

  <?php include("navbar.php"); ?>

  <div class="container w-50  mt-5">

  <section>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="./images/Variation de crêpes.jpg" class="d-block w-100" alt="Variation de crêpes">
        </div>
        <div class="carousel-item">
          <img src="./images/Roulé de crêpes salées au saumon fumé et fromage frais.jpg" class="d-block w-100" alt="Roulé de crêpes salées au saumon fumé et fromage frais">
        </div>
        <div class="carousel-item">
          <img src="./images/milk-shake au chocolat.jpg" class="d-block w-100" alt="milk-shake au chocolat">
        </div>
        <div class="carousel-item">
          <img src="./images/restaurant Cafe avec chaise jaune 1.jpg" class="d-block w-100" alt="restaurant Cafe avec chaise jaune">
        </div>
      </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
    </div>
  </section>
  </div>

  <div class="container mt-5">
  <section>
    <div class="jumbotron my-3">
      <div class="bg-light">
        <h2 class="display-4 mx-3 my-4 text-center font-weight-bold text-warning">1001 Crêpes</h2>
        <p class="lead text-center">Vous trouverez chez nous la crêpe sous toutes ses formes, mais pas que ...  
            Dans un cadre cosy et chaleureux, nos milk-shakes frais accompagneront délicieusement 
            nos généreuses crêpes salées ou sucrées. 
            Venez découvrir "la crêpe" autrement ! <br> A très bientôt. 
        </p>
      </div>
    </div>
  </section>

  <section>
    <div class="card my-5">
      <div class="row g-0">  
        <div class="col-md-8">
          <div class="card-body">
            <h4 class="card-title text-center text-warning">Toujours Bio</h4>
            <p class="card-text text-justify"> Nous sélectionnons attentivement toutes nos matières premières, 
                en tenant compte des saisons et en favorisant le plus possible nos approvisionnements
                auprès de producteurs locaux avec lesquels nous entretenons des relations personnelles
                et directes pour garantir la qualité et l'exclusivité de certains produits.
            </p>
          </div>
        </div>
        <div class="col-md-4">
          <img src="./images/ingredients bio.jpg" class="card-img-top" alt="ingredients bio">
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="card my-5">
      <div class="row g-0">  
        <div class="col-md-8">
          <div class="card-body">
            <h4 class="card-title text-center text-warning">Promo</h4>
            <p class="card-text text-justify"> Remise de 20% sur tous nos milk-shakes. 
                Valable du 01/12/2022 au 31/12/2022.
            </p>
          </div>
        </div>
          <div class="col-md-4">
            <img src="./images/milk-shake colorés.jpg" class="card-img-top" alt="milk-shakes colorés">
          </div>
      </div>
    </div> 
  </section>
  
  </div>
  <?php include("footer.php"); ?>
    
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>