<?php
  // Initialiser la session
  session_start();
  // Vérifier si l'utilisateur est connecté, sinon le rediriger vers la page de connexion (login.php)
  if(!isset($_SESSION["username"])){
    header("Location: login.php");
    exit(); 
  }
?>
<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" href="../style.css" />
  </head>
  <body>
    <div class="sucess">
    <h1>Bienvenue <?php echo $_SESSION['username']; ?>!</h1>
    <p>Espace admin.</p>
    <a href="add_user.php">Add user</a> | 
    <a href="#">Update user</a> | 
    <a href="#">Delete user</a> | 
    <a href="../logout.php">Déconnexion</a>
    </ul>
    </div>
  </body>
</html>