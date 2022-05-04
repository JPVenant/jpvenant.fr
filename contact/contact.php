<!-- Formulaire de contact -->
<img class="shape" src="contact/images/image-shape-contact.png" alt="#" width="100%"/>
<section id="contact" class="contact-area">
  <!--======  Début du titre ======-->
  <div class="titre-filigane-2">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12">
          <div class="content">
            <span> contact </span>
            <h2 class="fw-bold text-white"><img src="contact/images/person-lines-fill.svg" alt="icone t'chat" width="40" height="40"> Contactez-nous</h2>
            <h3 class="gray-bg">jpvenant.fr</h3>
            <p>Besoin d'un renseignement ou écrire'Je t'aime' ?<br> ce formulaire est fait pour vous !</p>
            <?php if($_GET['msg']=='send'){echo($msg);} ?>
          </div>
        </div>
      </div>
    </div>
    <!-- container -->
  </div>
  <!--======  FIN du titre ======-->
  <div class="container">
    <form method="post" enctype="multipart/form-data" >
      <div>
        <label for="pseudo">Nom</label>
        <input type="text" name="name" placeholder="Durand" required>
      </div>
      <div>
        <label for="pseudo">Prénom</label>
        <input type="text" name="firstname" placeholder="Pierre">
      </div>
      <div>
        <label for="email">Email</label>
        <input type="email" name="email" placeholder="pierre.durand@email.com" required>
      </div>
      <div>
        <label for="subject">Quel est l'objet de votre message ? </label>
        <select name="subject" id="subject" required>
          <option value="" disabled selected hidden>Choisissez !</option>
          <option value="devis">Demande de devis</option>
          <option value="question-produit">Question à propos d’un produit</option>
          <option value="formule-standard">Formule standard</option>
          <option value="formule-business">Formule Business</option>
          <option value="formule-premium">Formule premium</option>
          <option value="options">Options</option>
          <option value="autre">Autre...</option>
        </select>
      </div>
      <div>
        <label for="pass">Message</label>
        <textarea name="message" placeholder="Bonjour, je viens par ici pour vous dire que je vous aime !"></textarea>
      </div><br>
    <div>
        <label for="fichier">Fichier</label>
        <input type="file" name="fichier" id="fichier" multiple>
      </div>
      <div>
        <button class="button" type="submit" name="submit">Envoyer</button>
      </div>
    </form>
  </div>
</section>

<!-- FIN du formulaire de contact -->