<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://kit.fontawesome.com/f18291f973.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>Menu</title>
</head>

<body id="bg1">

  <nav class="navbar navbar-expand-md p-0 navbar-light bg-white shadow sticky-top">
    <div class="container-fluid ">
      <a class="navbar-brand mx-0" href="./index.html"> <img src="./images/logo 1001crepes.png" width="100" height="100" alt="logo crepes"></a>
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

  <div class="container my-5">

    <h1 class="bg-warning text-white text-center"> LE MENU </h1>
    
    <div class="accordion my-5" id="accordionExample">

    <section>
      <div class="card">
        <div class="card-header" id="headingOne">
          <h2 class="mb-0">
            <button class="btn text-warning font-weight-bold" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            Crêpes salées
            </button>
          </h2>
        </div>
        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
          <div class="card-body">
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                <div class="d-flex justify-content-between align-items-center">
                  <span>Roulé de crêpes au saumon fumé et fromage frais</span> 
                  <span class="badge badge-warning badge-pill">8€</span>
                </div>
              </li>
              <li class="list-group-item">
                <div class="d-flex justify-content-between align-items-center">
                  <span>Crêpes à la farine de sarrasin, œuf et lardons</span> 
                  <span class="badge badge-warning badge-pill">7€</span>
                </div>
              </li>
              <li class="list-group-item">
                <div class="d-flex justify-content-between align-items-center">
                  <span>Crêpes aux épinards, saumon et avocat</span> 
                  <span class="badge badge-warning badge-pill">8€</span>
                </div>
              </li>
              <li class="list-group-item">
                <div class="d-flex justify-content-between align-items-center">
                  <span>Crêpes aux asperges, œuf mollet et sauce hollandaise</span> 
                  <span class="badge badge-warning badge-pill">8€</span>
                </div>
              </li>
              <li class="list-group-item">
                <div class="d-flex justify-content-between align-items-center">
                  <span>Crêpes au poulet et champignons de Paris</span> 
                  <span class="badge badge-warning badge-pill">9€</span>
                </div>
              </li>
              <li class="list-group-item">
                <div class="d-flex justify-content-between align-items-center">
                  <span>Crêpes roulées à la Mexicaine poulet fromage</span> 
                  <span class="badge badge-warning badge-pill">9€</span>
                </div>
              </li>
            </ul>                
          </div>
        </div>
      </div>
    </section>
    
    <section>
      <div class="card">
        <div class="card-header" id="headingTwo">
          <h2 class="mb-0">
            <button class="btn text-warning font-weight-bold" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              Crêpes sucrées
            </button>
          </h2>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
          <div class="card-body">
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                <div class="d-flex justify-content-between align-items-center">
                  <span>Gâteau de crêpes chocolat banane</span> 
                  <span class="badge badge-warning badge-pill">7€</span>
                </div>
              </li>
              <li class="list-group-item">
                <div class="d-flex justify-content-between align-items-center">
                  <span>Crêpes roulées à la confiture de baies fraîches</span> 
                  <span class="badge badge-warning badge-pill">7€</span>
                </div>
              </li>
              <li class="list-group-item">
                <div class="d-flex justify-content-between align-items-center">
                  <span>Crêpes roulées façon tiramisu</span> 
                  <span class="badge badge-warning badge-pill">8€</span>
                </div>
              </li>
              <li class="list-group-item">
                <div class="d-flex justify-content-between align-items-center">
                  <span>Crêpes à la fleur d'oranger et la crème de citron maison</span> 
                  <span class="badge badge-warning badge-pill">7€</span>
                </div>
              </li>
              <li class="list-group-item">
                <div class="d-flex justify-content-between align-items-center">
                  <span>Crêpes au thé matcha</span> 
                  <span class="badge badge-warning badge-pill">9€</span>
                </div>
              </li>
              <li class="list-group-item">
                <div class="d-flex justify-content-between align-items-center">
                  <span>Gâteau de crêpes à la noix de coco et éclats de pistaches</span> 
                  <span class="badge badge-warning badge-pill">9€</span>
                </div>
              </li>
              <li class="list-group-item">
                <div class="d-flex justify-content-between align-items-center">
                  <span>Sucette de crêpes roulées cacao vanille</span> 
                  <span class="badge badge-warning badge-pill">8€</span>
                </div>
              </li>
              <li class="list-group-item">
                <div class="d-flex justify-content-between align-items-center">
                  <span>Crêpes vegan et sans gluten au caramel de dattes et noix</span> 
                  <span class="badge badge-warning badge-pill">€10</span>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    
    <section>
      <div class="card">
        <div class="card-header" id="headingThree">
          <h2 class="mb-0">
            <button class="btn text-warning font-weight-bold" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              Milk-shakes <span class="badge badge-danger">New</span>
            </button>
          </h2>
        </div>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
          <div class="card-body">
          <ul class="list-group list-group-flush">
            <li class="list-group-item">
              <div class="d-flex justify-content-between align-items-center">
                <span>Milk-shake fraise</span> 
                <span class="badge badge-warning badge-pill">5€</span>
              </div>
            </li>
            <li class="list-group-item">
              <div class="d-flex justify-content-between align-items-center">
                  <span>Milk-shake kiwi et menthe </span> 
                  <span class="badge badge-warning badge-pill">6€</span>
                </div>
            </li>
            <li class="list-group-item">
              <div class="d-flex justify-content-between align-items-center">
                <span>Milk-shake tonique aux fruits frais et au yaourt bio</span> 
                <span class="badge badge-warning badge-pill">8€</span>
              </div>
            </li>
            <li class="list-group-item">
              <div class="d-flex justify-content-between align-items-center">
                <span>Milk-shake banane amande avec des flocons d'avoine</span> 
                <span class="badge badge-warning badge-pill">9€</span>
              </div>
            </li>
            <li class="list-group-item">
              <div class="d-flex justify-content-between align-items-center">
                <span>Milk-shake banane agrumes</span> 
                <span class="badge badge-warning badge-pill">7€</span>
              </div>
            </li>
          </ul>                
          </div>
        </div>
      </div>
    </section>
    
    <section>
      <div class="card">
        <div class="card-header" id="headingFour">
          <h2 class="mb-0">
            <button class="btn text-warning font-weight-bold" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
              Boissons chaudes
            </button>
          </h2>
        </div>
        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
          <div class="card-body">
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                <div class="d-flex justify-content-between align-items-center">
                  <span>Espresso</span> 
                  <span class="badge badge-warning badge-pill">2€</span>
                </div>
              </li>
              <li class="list-group-item">
                <div class="d-flex justify-content-between align-items-center">
                  <span>Capuccino </span> 
                  <span class="badge badge-warning badge-pill">4€</span>
                </div>
              </li>
              <li class="list-group-item">
                <div class="d-flex justify-content-between align-items-center">
                  <span>Café au lait</span> 
                  <span class="badge badge-warning badge-pill">3€</span>
                </div>
              </li>
              <li class="list-group-item">
                <div class="d-flex justify-content-between align-items-center">
                  <span>Chocolat chaud</span> 
                  <span class="badge badge-warning badge-pill">4€</span>
                </div>
              </li>
              <li class="list-group-item">
                <div class="d-flex justify-content-between align-items-center">
                  <span>Thé</span> 
                  <span class="badge badge-warning badge-pill">2€</span>
                </div>
              </li>
            </ul>                
          </div>
        </div>
      </div>
    </section> 
    </div>
    
  </div>

  <footer class="card-footer bg-light">
    <div class="container-fluid">
      <div class="d-flex mx-1">
        <div class="p-2 flex-grow-1"><i class="fa-regular fa-copyright"></i><small> Copyright - 1001Crêpes</small></div>
        <div class="p-2"><a class="nav-item nav-link text-dark "  href="#"><i class="fa-brands fa-facebook"></i></a></div>
        <div class="p-2"><a class="nav-item nav-link text-dark" href="#"><i class="fa-brands fa-instagram"></i></a></div>
      </div>
    </div>
  </footer>

 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>