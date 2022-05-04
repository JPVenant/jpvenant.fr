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
<?php
require('config.php');

if (isset($_REQUEST['username'], $_REQUEST['email'], $_REQUEST['password'])){
  // récupérer le nom d'utilisateur 
  $username = stripslashes($_REQUEST['username']);
  $username = mysqli_real_escape_string($conn, $username); 
  // récupérer l'email 
  $email = stripslashes($_REQUEST['email']);
  $email = mysqli_real_escape_string($conn, $email);
  // récupérer le mot de passe 
  $password = stripslashes($_REQUEST['password']);
  $password = mysqli_real_escape_string($conn, $password);
  
  $query = "INSERT into `users` (username, email, type, password)
        VALUES ('$username', '$email', 'user', '".hash('sha256', $password)."')";
  $res = mysqli_query($conn, $query);

    if($res){
       echo "<div class='sucess'>
             <h3>Inscription réussie !</h3>
             <p><a href='login.php'>connectez-vous</a></p>
       </div>";
    }
}else{
?>
<form class="box" action="" method="post">
  <h1 class="box-logo box-title">
  <a href="https://jpvenant.fr">jpvenant.fr</a>
  </h1>
    <h1 class="box-title">S'inscrire</h1>
  <input type="text" class="box-input" name="username" 
  placeholder="Nom d'utilisateur" required />
  
    <input type="text" class="box-input" name="email" 
  placeholder="Email" required />
  
    <input type="password" class="box-input" name="password" 
  placeholder="Mot de passe" required />
  
    <input type="submit" name="submit" 
  value="S'inscrire" class="box-button" />
  
    <p class="box-register">Déjà inscrit? 
  <a href="login.php">Connection</a></p>
</form>
<?php } ?>
</body>
</html>