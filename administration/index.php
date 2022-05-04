<?php
  // Initialiser la session
  session_start();
  // Vérifier si l'utilisateur est connecté, sinon redirection vers la page de connexion (login.php)
  if(!isset($_SESSION["username"])){
    header("Location: login.php");
    exit(); 
  }
?>
<!DOCTYPE html>
<html>
  <head>
  <!--====== Favicon Icon ======-->
<link rel="shortcut icon" href="favicon.png" type="image/png" />
<!--====== Bootstrap css ======-->
<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
 <!--====== glightbox css -->
 <link rel="stylesheet" href="assets/css/glightbox.min.css">
<!--====== Style css ======-->
<link rel="stylesheet" href="assets/css/jpvenant.css" />
  </head>
  <body>
    <div class="sucess">
    <h1>Bienvenue <?php echo $_SESSION['username']; ?>!</h1>
    <p>Espace utilisateur.</p>
    <a href="login.php">Déconnexion</a>
    </div>
  </body>
</html>