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
require('../config.php');

if (isset($_REQUEST['username'], $_REQUEST['email'], $_REQUEST['type'], $_REQUEST['password'])){
  // récupérer le nom d'utilisateur 
  $username = stripslashes($_REQUEST['username']);
  $username = mysqli_real_escape_string($conn, $username); 
  // récupérer l'email 
  $email = stripslashes($_REQUEST['email']);
  $email = mysqli_real_escape_string($conn, $email);
  // récupérer le mot de passe 
  $password = stripslashes($_REQUEST['password']);
  $password = mysqli_real_escape_string($conn, $password);
  // récupérer le type (user | admin)
  $type = stripslashes($_REQUEST['type']);
  $type = mysqli_real_escape_string($conn, $type);
  
    $query = "INSERT into `users` (username, email, type, password)
          VALUES ('$username', '$email', '$type', '".hash('sha256', $password)."')";
    $res = mysqli_query($conn, $query);

    if($res){
       echo "<div class='sucess'>
             <h3>L'utilisateur a été créé avec succés.</h3>
             <p>Retour<a href='home.php'>ici</a> page d'accueil</p>
       </div>";
    }
}else{
?>
<form class="box" action="" method="post">
  <h1 class="box-logo box-title">
  <a href="https://jpvenant.fr">jpvenant.fr</a>
  </h1>
    <h2 class="box-title">Ajout administrateur/Utilisateur</h2>
  <input type="text" class="box-input" name="username" 
  placeholder="Nom d'utilisateur" required />
  
    <input type="text" class="box-input" name="email" 
  placeholder="Email" required />
  
  <div>
      <select class="box-input" name="type" id="type" >
        <option value="" disabled selected>Fonction</option>
        <option value="admin">Administrateur</option>
        <option value="user">Utilisateur</option>
      </select>
  </div>
  
    <input type="password" class="box-input" name="password" 
  placeholder="Mot de passe" required />
  
    <input type="submit" name="submit" value="+ Add" class="box-button" />
</form>
<?php } ?>
</body>
</html>