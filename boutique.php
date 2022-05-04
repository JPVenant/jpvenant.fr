<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>La boutique</title>

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

<!-- NAVBAR -->
<?php include("navbars/navbar-boutique.html"); ?>
    
<!-- LA BOUTIQUE -->
<section id="boutique" class="boutique">
<!--======  Début du titre ======-->
<div class="titre-filigane">
      <div class="container" >
          <div class="row justify-content-center">
              <div class="col-12">
                  <div class="content">
                      <span> vendeur </span>
                      <h2 class="fw-bold"><img src="tchat/images/chat-dots.svg" alt="icone t'chat" width="40" height="40" > La boutique</h2>
                      <h3 class="gray-bg">jpvenant.fr</h3>
                      <p>La boutique qui vous propose les produits que nous aimons et utilisons !</p>
                  </div>
              </div>
          </div>
      </div>
      <!-- container -->
  </div>
  <!--======  FIN du titre ======-->
<iframe id="boutique" name="La boutique" src="https://boutique.jpvenant.fr/boutique/" scrolling="yes" height="756" width="100%" FRAMEBORDER="no"></iframe>
</section>

<!-- FOOTER -->
<?php include("footers/footer.php"); ?>

<!--====== LES SCRIPTS ======-->
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/jquery.js"></script>
<script src="assets/js/main.js"></script>
<!--====== FIN DES SCRIPTS ======-->
</body>
</html>