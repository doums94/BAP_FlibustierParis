(function () {

    /*
L'orsque l'on clique sur un onglet :
    On retire la class active de l'onglet actif
    J'ajoute la class active à l'onglet actuel

    On retire la class active sur le contenu actif
    J'ajoute la class active sur le contenu correspondant à mon click
 */

    var afficherOnglet = function (a) {
        var li = a.parentNode;
        var div = a.parentNode.parentNode.parentNode;

        if (li.classList.contains('active')) {
            return false
        }

        // On retire la class active de l'onglet actif
        div.querySelector('.tabs .active').classList.remove('active');
        // J'ajoute la class active à l'onglet actuel
        li.classList.add('active');

        // On retire la class active sur le contenu actif
        div.querySelector('.tab-content.active').classList.remove('active');
        // J'ajoute la class active sur le contenu correspondant à mon click
        div.querySelector(a.getAttribute('href')).classList.add('active')
    };

    var tabs = document.querySelectorAll('.tabs a');
    for (var i = 0; i < tabs.length; i++){
        tabs[i].addEventListener('click', function (e) {
            afficherOnglet(this)
        })
    }

    /*
    Je recupere le hash
    Ajouter la class active sur le lien href"hash"
    Retirer la class active sur les autres onglets
    AFFICHER / MASQUER les contenus
     */

    var hash = window.location.hash;
    var a = document.querySelector('a[href="'+ hash +'"]');
    if (a !== null && !a.classList.contains('active')) {
        afficherOnglet(a)
    }

})();