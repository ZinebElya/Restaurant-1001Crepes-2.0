
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://kit.fontawesome.com/f18291f973.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>Message</title>
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

  <div class="container mt-5">

  <section>
    <div class="card my-5">
      <div class="row g-0">  
          <div class="card-body">
<?php
include_once("submit_form.php");

if (isset($_POST['prenom'])) {
    $prenom = $_POST['prenom'];
}
echo "
<h4 class='card-title text-center text-warning'> Bonjour </h4>
<p class='card-text text-justify text-center'>
Votre message est envoyé. <br>
On vous répondra dans les plus brefs délais.
</p>";
?>

          </div>
        </div>
    </div>
  </section>

  
  
  </div>


    
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>