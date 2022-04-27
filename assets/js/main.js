// Bouton retour haut de page
$(document).ready( function () {
    // Ajoute un bouton de retour en haut de page
    $('body').append('<div id="retourneEnHaut" title="Retour en haut">&nbsp;</div>');
    
    // Au clic sur le bouton, défilement automatique vers le haut de la page
    $('#retourneEnHaut').click( function() {
        $('html,body').animate({scrollTop: 0}, 'slow');
    });
});

$(window).scroll(function() {
    // Si en haut le bouton de retour vers le haut de page reste invisble
    if ( $(window).scrollTop() == 0 )
        $('#retourneEnHaut').fadeOut();
    else
        $('#retourneEnHaut').fadeIn();
});
// FIN bouton de retour haut de page
