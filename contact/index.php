<?php
//Base de donnée
if(!empty($_POST["send"])) {
	$name = $_POST["name"];
	$email = $_POST["email"];
	$subject = $_POST["subject"];
	$message = $_POST["message"];

	$connexion = mysqli_connect("localhost", "root", "", "contact_form") or die("Erreur de connexion: " . mysqli_error($connexion));
	$result = mysqli_query($connexion, "INSERT INTO contact (name, email, subject, message) VALUES ('" . $name. "', '" . $email. "','" . $subject. "','" . $message. "')");
	if($result){
		$db_msg = "Vos informations de contact sont enregistrées avec succés.";
		$type_db_msg = "success";
	}else{
		$db_msg = "Erreur lors de la tentative d'enregistrement de contact.";
		$type_db_msg = "error";
	}
	
}
//l'envoie du mail
if(!empty($_POST["send"])) {
	$name = $_POST["name"];
	$email = $_POST["email"];
	$subject = $_POST["subject"];
	$message = $_POST["message"];


	$toEmail = "contact@jpvenant.fr";
	$mailHeaders = "From: " . $name . "<". $email .">\r\n";
	if(mail($toEmail, $subject, $message, $mailHeaders)) {
	    $mail_msg = "Vos informations de contact ont été reçues avec succés.";
		$type_mail_msg = "success";
	}else{
		$mail_msg = "Erreur lors de l'envoi de l'e-mail.";
		$type_mail_msg = "error";
	}
}
?>

<html>

<head>
  <script src="contact/jquery.min.js"></script>
  <link rel="stylesheet" href="contact/contact.css" />
  <script type="text/javascript" src="contact/contact.js"></script>
</head>

<body>
  <!-- ====== FORMULAIRE DE CONTACT ====== -->
  <img class="shape" src="contact/images/image-shape-contact.png" alt="#" width="100%" />
  <section id="contact" class="contact-area">
    <!--======  DEBUT DU TITRE ======-->
    <div class="titre-filigane-2">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12">
            <div class="content">
              <span> contact </span>
              <h2 class="fw-bold text-white"><img src="contact/images/person-lines-fill.svg" alt="icone t'chat" width="40" height="40"> Contactez-nous</h2>
              <h3 class="gray-bg">jpvenant.fr</h3>
              <p>Besoin d'un renseignement ou écrire'Je t'aime' ?<br> ce formulaire est fait pour vous !</p><br>
              <div id="statusMessage">
                <?php if (! empty($db_msg)) { ?>
                <p class='<?php echo $type_db_msg; ?>Message'><?php echo $db_msg; ?></p>
                <?php } ?>
                <?php if (! empty($mail_msg)) { ?>
                <p class='<?php echo $type_mail_msg; ?>Message'><?php echo $mail_msg; ?></p>
                <?php } ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- container -->
    </div>
    <!--======  FIN DU TITRE ======-->
    <div class="container">

      <form id="form" enctype="multipart/form-data" onsubmit="return validate()" method="post">
        <h3>Tel: 06 56 76 86 23</h3>
        <div>
          <label>Nom: <span>*</span></label>
          <input type="text" id="name" name="name" placeholder="Nom" />
        </div>
        <div>
          <label>Email: <span>*</span></label><span id="info" class="info"></span>
          <input type="text" id="email" name="email" placeholder="Email" />
        </div>
        <div>
          <label>Sujet: <span>*</span></label>
          <input type="text" id="subject" name="subject" placeholder="Demande de renseignement" />
        </div>
        <div>
          <label>Message:</label>
          <textarea id="message" name="message" placeholder="Message..."></textarea>
        </div>
        <div>
          <button class="button" type="button" onclick="resetForm();">Réinitialiser le formulaire</button><br>
          <button class="button-2" type="submit" name="send" value="Envoyer le message">Envoyer le message</button>
        </div>

      </form>
    </div>
  </section>

  <!-- ====== SCRIPT JS REINITIALISATION DU FORMULAIRE ====== -->
  <script>
    function resetForm() {
      document.getElementById("form").reset();
    }
  </script>
  <!-- ====== FIN DU SCRIPT DE REINITIALISATION DU FORMULAIRE ====== -->
</body>

</html>
