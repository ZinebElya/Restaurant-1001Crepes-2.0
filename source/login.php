<?php
session_start();
include_once("mysqli_connect.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $admin = trim($_POST['admin']);
    $password = $_POST['password'];

    $statement = $mysqli->prepare("SELECT * FROM users WHERE admin=? AND password=?");
    $statement->bind_param('ss', $admin, $password);
    $statement->execute();
    $result = $statement->get_result();
    $user = $result->fetch_assoc();
  
    if ($user) {
        $_SESSION['user_id'] = true;
        header('Location: backoffice.php');
        exit;
    } else {
        include('navbar_backoffice.php');
        echo "
<div class='container my-5 w-50'>
<div class='card'>
  <div class='card-body font-weight-bold'>
    <p class='card-text text-center text-danger'> Le nom de l'administrateur ou le mot de passe est incorrect</p>
  </div>
</div>
</div>
";
    }
    $mysqli->close();
}
?>

<?php require_once("navbar_backoffice.php"); ?>

<div class="container my-5">

    <h1 class="bg-warning text-white text-center mb-5"> Login</h1>

    <div class="border rounded border-warning p-5 m-5">
      <form action="" method="POST">
        <div class="form-row">
          <div class="form-group col-8">
            <label for="admin" class="text-warning font-weight-bold">Administrateur</label>
            <input type="text" class="form-control" name="admin" required>
          </div>
        </div>
       
        <div class="form-row">
          <div class="form-group col-8">
            <label for="password" class="text-warning font-weight-bold">Mot de passe</label>
            <input type="password" class="form-control" name="password"  required>
          </div>
        </div>
      
        <input type="submit" name="submit" value="Login" class="btn btn-warning" />
        
      </form>
    </div>
  </div>

  <?php






 
