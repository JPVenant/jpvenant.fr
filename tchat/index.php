<?php
session_start();
include_once('inc/header.php');
if(isset($_SESSION['user']) && !empty($_SESSION['user'])){
    // Ici, l'utilisateur est connecté
    ?>
    <p class="fs-4"><span class="text-danger">Bonjour</span> <?= $_SESSION['user']['pseudo'] ?>, <span class="text-danger">bon t'chat !</span> <a class="btn btn-danger" href="deconnexion.php">Déconnexion</a></p>
<?php
}else{
    // Ici l'utilisateur n'est pas connecté
    ?>
    <div class="col-12 my-4">
    <a class="btn btn-danger mr-2" href="connexion.php">Connexion</a> <a class="btn btn-danger" href="inscription.php">Inscription</a>
    </div>
<?php
}
?>

<div class="col-12 my-2">
    <div class="p-2" id="discussion">
    </div>
</div>
<div class="col-12 saisie">
    <div class="input-group">
        <input type="text" class="form-control" id="texte" placeholder="Entrez votre texte">
        <div class="input-group-append">
            <button class="input-group-text btn btn-danger" id="valid">Envoyer</button>
        </div>
    </div>
</div>
<?php
include_once('inc/footer.php');
