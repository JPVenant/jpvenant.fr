<!-- PHP FORMULAIRE DE CONTACT -->
<?php

    $msg='<p style="font-weight: bold; color: #f20505;">Votre message a bien été envoyé.</p>';
    if (isset($_POST['message'])) {
        $entete  = 'MIME-Version: 1.0' . "\r\n";
        $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        $entete .= 'From: jpvenant@jpvenant.fr' . "\r\n";
        $entete .= 'Reply-to: ' . $_POST['email'];
       

        $message = '<h1>Message envoyé depuis la page Contact de jpvenant.fr</h1>
        <p><b>Email : </b>' . $_POST['email'] . '<br>
        <b>Nom : </b>' . $_POST['name'] . '<br>
        <b>Prénom : </b>' . $_POST['firstname'] . '<br>
        <b>Sujet : </b>' . $_POST['subject'] . '<br>
        <b>Message : </b>' . htmlspecialchars($_POST['message']) . '</p>';

        $retour = mail('contact@jpvenant.fr', 'Envoi depuis jpvenant.fr', $message, $entete);
         
        // Appel le header en paramêtres d'URL
        header("location: ?msg=send#contact");   
    }
    ?>
    <!-- FIN PHP DU FORMULAIRE DE CONTACT -->

<!DOCTYPE html>
<html lang="fr">

<head>
  <!-- BALISES META -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="Content-Type" content="UTF-8">
  <meta name="Content-Language" content="fr">
  <meta name="Description" content="Agence digitale de développement web, spécialiste de Bootstrap et de WorldPress, située à Brioude en Haute-Loire.">
  <meta name="Keywords" content="Développeur web, sites web, agence web, agence digitale, bootstrap, wordpress, développeur webmobile, site web responsive, ">
  <meta name="Subject" content="Développeur web et webmobile">
  <meta name="Copyright" content="© 2022 jpvenant.fr">
  <meta name="Author" content="Jean-Philippe Venant">
  <meta name="Publisher" content="Jean-Philippe Venant">
  <meta name="Identifier-Url" content="https://jpvenant.fr/">
  <meta name="Reply-To" content="contact@jpvenant.fr">
  <meta name="Revisit-After" content="7 days">
  <meta name="Rating" content="general">
  <meta name="Distribution" content="global">
  <meta name="Expires" content="jamais">
  <meta name="Geography" content="Brioude Haute-Loire France">
  <meta name="Category" content="internet">
  <!-- FIN DES BALISES META -->

  <!--====== Titre ======-->
  <title>jpvenant.fr</title>

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
<?php include("navbars/navbar-principale.html"); ?>
<!-- HEADER -->
<?php include("headers/header.html"); ?>
<!-- SPECIALISATIONS -->
<?php include("specialisations/specialisations.html"); ?>
<!-- DOUBLE TOP -->
<?php include("double-top/doubleTop.html"); ?>
<!-- PRESENTATION EN VIDEO -->
<?php include("videos/videoPresentations.html"); ?>
<!-- SERVICES -->
<?php include("services/services.html"); ?>
<!-- HEBERGEURS -->
<?php include("hebergeurs/hebergeurs.html"); ?>
<!-- TARIFS -->
<?php include("tarifs/tarifs.html"); ?>
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
                      <p>La boutique vous propose des produits que nous utilisons au quotidien !</p>
                  </div>
              </div>
          </div>
      </div>
      <!-- container -->
  </div>
  <!--======  FIN du titre ======-->
<iframe id="boutique" name="La boutique" src="https://boutique.jpvenant.fr/boutique/" scrolling="yes" height="756" width="100%" FRAMEBORDER="no"></iframe>
</section>
<!-- LE T'CHAT -->
<?php include("tchat/tchat.html"); ?>
<!-- CONTACTEZ-NOUS -->
<?php include("contact/contact.php"); ?>
<!-- FOOTER -->
<?php include("footers/footer.php"); ?>

  <!--====== LES SCRIPTS ======-->
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/jquery.js"></script>
  <script src="assets/js/main.js"></script>
  <!--====== FIN DES SCRIPTS ======-->
</body>
</html>