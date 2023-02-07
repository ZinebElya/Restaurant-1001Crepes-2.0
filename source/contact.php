<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://kit.fontawesome.com/f18291f973.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>Contact</title>
</head>

<body id="bg2">

  <?php include("navbar.php"); ?>

  <div class="container my-5">

    <h1 class="bg-warning text-white text-center mb-5"> CONTACT</h1>
        
      <div class="border rounded border-warning p-5">
        <form action="submit_form.php" method="POST" >
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="prenom" class="text-warning font-weight-bold">Prénom</label>
              <input type="text" class="form-control" id="inputFirstname" name="prenom" placeholder="John" required>
            </div>
            <div class="form-group col-md-6">
              <label for="nom" class="text-warning font-weight-bold">Nom</label>
              <input type="text" class="form-control" id="inputLastname" name="nom" placeholder="Doe" required>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-12">
              <label for="email" class="text-warning font-weight-bold">Email</label>
              <input type="email" class="form-control" id="inputEmail4" name="email" placeholder="johndoe@exemple.com" required>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-6">
              <label for="sujet" class="text-warning font-weight-bold">Sujet</label>
                <select class="form-select mx-3" id="subject" name="sujet" aria-label="select option">
                  <option value='Suggestions'>Suggestions</option>
                  <option value='Renseignements'>Renseignements</option>
                  <option value='Reservations'>Réservations</option>
                  <option value='Reclamations'>Réclamations</option>
                  <option value='Autres'>Autres</option>
                  
                </select>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-12">
              <label for="message" class="text-warning font-weight-bold">Message</label>
              <textarea class="form-control" id="message" aria-describedby="messageHelp" name="message" placeholder="Votre message" required></textarea>
            </div>
          </div>
          <button type="submit" class="btn btn-warning">Envoyer</button>
        </form>
      </div>

  </div>
  <?php include("footer.php"); ?>
 
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>