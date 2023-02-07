<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://kit.fontawesome.com/f18291f973.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title> A propos</title>
</head>

<body id="bg2">

  <?php include("navbar.php"); ?>

  <div class="container my-5 bg-white ">

    <div class="accordion my-5" id="accordionExample">

    <section>
      <ul class="list-group list-group-horizontal  justify-content-center my-5">
        <li class="list-group-item"  style="border:0;" >
          <button class="btn btn-warning text-white font-weight-bold" type="button" data-toggle="collapse" data-target="#collapseHistoire" aria-expanded="false" aria-controls="collapseHistoire">
            Notre histoire
          </button>
        </li>
        <li class="list-group-item"  style="border:0;" >
          <button class="btn btn-warning text-white font-weight-bold" type="button" data-toggle="collapse" data-target="#collapseAdresses" aria-expanded="false" aria-controls="collapseAdresses">
            Nos adresses
          </button>
        </li>
        <li class="list-group-item"  style="border:0;">
          <button class="btn btn-warning text-white font-weight-bold" type="button" data-toggle="collapse" data-target="#collapseHoraires" aria-expanded="false" aria-controls="collapseHoraires">
            Nos horaires 
          </button>
        </li>
      </ul>
    </section>

    <section>
      <div class="collapse mb-5" id="collapseHistoire" data-parent="#accordionExample">

        <h1 class="text-warning text-center"> Notre histoire </h1>
        <div class="card m-5 p-4 border border-warning">
          <div class="card-body ">
            <h3 class="card-title text-center text-warning">1001 Crêpes <br> Un rêve qui devient réalité</h3>
            <p class="card-text text-justify mb-1"> 
              Entre Jhon et Doe c'est d'abord une histoire d'amitié. 
              Amis depuis l'âge de 5 ans, c'est en se retrouvant les samedis après-midi dans les rues de Bruxelles pour refaire le monde autour d'une crêpe qu'ils ont eu l'idée 
              de monter une enseigne de restauration rapide autour de la crêpe et d'apporter ainsi une offre complémentaire aux restaurants de burgers et aux pizzerias.
              Il y a 20 ans, les deux amis se sont associés dans la même aventure entrepreneuriale. 1001 Crêpes est né !
            </p>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="collapse show" id="collapseAdresses" data-parent="#accordionExample">
       
        <h1 class="text-warning text-center my-5"> Nos adresses </h1>

        <div class="row justify-content-center align-items-center border border-warning">
          <div class="col-12">
            <div class="card-body ">
              <h4 class="card-title text-center text-warning font-weight-bold">1001 Crêpes Bruxelles</h4>
              <p class="card-text text-center font-weight-bold ">Av. Jules de Trooz 76, 1150 Bruxelles</p>
            </div>
          </div>
          <div class="col-12 col-lg-6 my-3">
           <img src="./images/bruxelles.jpg" class="d-block w-100" alt=""> 
          </div>
          <div class="col-12 col-lg-6 my-3">
            <div class="card" style="width: 100%">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2519.657106906958!2d4.427226015171274!3d50.83751496728088!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3db5da94875eb%3A0xab310f7c2a48d22c!2sAv.%20Jules%20de%20Trooz%2076%2C%201150%20Woluwe-Saint-Pierre!5e0!3m2!1sfr!2sbe!4v1671913457318!5m2!1sfr!2sbe" width="300" height="300" style="border:0;" class="d-block w-100" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
        </div>

        <div class="row justify-content-center align-items-center border border-warning">
          <div class="col-12">
            <div class="card-body">
              <h4 class="card-title text-center text-warning font-weight-bold">1001 Crêpes Liége</h4>
              <p class="card-text text-center font-weight-bold">Rue des Steppes 165, 4000 Liège </p>
            </div>
          </div>
          <div class="col-12 col-lg-6 my-3">
            <img src="./images/liege.jpg" class="d-block w-100" alt=""> 
          </div>
          <div class="col-12 col-lg-6 my-3">
            <div class="card" style="width: 100%">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2529.474279022658!2d5.595480415163449!3d50.65545408045391!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c0f09a13266815%3A0x4af53c4407d5e491!2sRue%20des%20Steppes%20165%2C%204000%20Li%C3%A8ge!5e0!3m2!1sfr!2sbe!4v1671916154629!5m2!1sfr!2sbe" width="300" height="300" style="border:0;" class="d-block w-100" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
        </div>

        <div class="row justify-content-center align-items-center border border-warning">
          <div class="col-12">
            <div class="card-body">
              <h4 class="card-title text-center text-warning font-weight-bold">1001 Crêpes Mons</h4>
              <p class="card-text text-center font-weight-bold">Rue des Arbalestriers 22, 7000 Mons </p>
            </div>
          </div>
          <div class="col-12 col-lg-6 my-3">
            <img src="./images/mons.jpg" class="d-block w-100" alt=""> 
          </div>
          <div class="col-12 col-lg-6 my-3">
            <div class="card" style="width: 100%">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2540.1532438022246!2d3.9569773151549184!3d50.456870994784104!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c24fe34cf797f3%3A0x2e0a6143aec55f0b!2sRue%20des%20Arbalestriers%2022%2C%207000%20Mons!5e0!3m2!1sfr!2sbe!4v1671916491902!5m2!1sfr!2sbe" width="300" height="300" style="border:0;" class="d-block w-100" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="collapse" id="collapseHoraires" data-parent="#accordionExample">
      
      <h1 class="text-warning text-center"> Nos horaires </h1>
      <div class="row justify-content-center">
        <div class="col-12 col-lg-8">
          <table class="table">
            <tbody>
              <tr>
                <th scope="row">Lundi</th>
                <td>10h-19h</td>
              </tr>
              <tr>
                <th scope="row">Mardi</th>
                <td>10h-19h</td>
              </tr>
              <tr>
                <th scope="row">Mercredi</th>
                <td>10h-19h</td>
              </tr>
              <tr>
                <th scope="row">Jeudi</th>
                <td>10h-19h</td>
              </tr>
              <tr>
                <th scope="row">Vendredi</th>
                <td>10h-20h</td>
              </tr>
              <tr>
                <th scope="row">Samedi</th>
                <td>10h-20h</td>
              </tr>
              <tr>
                <th scope="row">Dimanche</th>
                <td>Fermé</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      </div>
    </section>
    </div>
  
  </div>
  <?php include("footer.php"); ?>
    
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>