// FERMETURE AUTOMATIQUE DE LA NAVBAR EN MODE MOBILE

let navbarToggler = document.querySelector(".navbar-principale .navbar-toggler");
    var navbarCollapse = document.querySelector(".navbar-principale .navbar-collapse");
    document.querySelectorAll(".navbar-principale .fermeture-auto").forEach(e =>
        e.addEventListener("click", () => {
            navbarToggler.classList.remove("active");
            navbarCollapse.classList.remove('show')
        })
    );
    navbarToggler.addEventListener('click', function() {
        navbarToggler.classList.toggle("active");
    })

// FIN DE LA FERMETURE AUTOMATIQUE DE LA NAVBAR EN MODE MOBILE
