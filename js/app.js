(function ($) {

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
        $('.tabs .active').removeClass('active');
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
    Ajouter la class active sur le lien href "hash"
    Retirer la class active sur les autres onglets
    AFFICHER / MASQUER les contenus
    */

    var hash = window.location.hash;
    var a = document.querySelector('a[href="'+ hash +'"]');
    if (a !== null && !a.classList.contains('active')) {
        afficherOnglet(a)
    }

    var menu6mm = $('#menu-6mm');
    var menu8mm = $('#menu-8mm');

    $('input[name="perle"]').on('change', function () {
        $('#tab-pearl').show();
        var el = $(this);

        if (el.val() === '6mm') {
            menu6mm.show();
            menu8mm.hide();
        } else {
            menu6mm.hide();
            menu8mm.show();
        }

        updateBracelet();
    });

    $('input[name="taille"]').on('change', function () {
        updateBracelet();
    });
    
    function updateBracelet() {
        $('[data-bracelet]').hide();

        var selector = $('input[name="perle"]:checked').val() + $('input[name="taille"]:checked').val();

        $('[data-bracelet="'+selector+'"]').show();
    }


    $("#m1").click(function(){
        $(".un").css('display','inline-block')
    });
    $("#m2").click(function(){
        $(".deux").css('display','inline-block')
    });
    $("#m3").click(function(){
        $(".trois").css('display','inline-block')
    });
    $("#m4").click(function(){
        $(".quatre").css('display','inline-block')
    });
    $("#m5").click(function(){
        $(".cinq").css('display','inline-block')
    });


    // Config
    const cache = {
        'container': $('#pearlContainer'),
        'containerWidth': null,
        'containerHeight': null,
        'spacePerPearl': null,
        'elements': []
    };
    let numberPearls = 32;


    // Functions
    function updateValues() {
        cache.containerWidth = cache.container.width();
        cache.containerHeight = cache.container.height();
        cache.spacePerPearl = cache.containerWidth / numberPearls < 20 ? 20 : cache.containerWidth / numberPearls;
    }

    function updateView() {
        console.log(cache.containerHeight);
        for (let element of cache.elements) {
            element.css({
                'height': `${cache.spacePerPearl}px`,
                'width': `${cache.spacePerPearl}px`
            });
        }
    }

    updateValues();


    console.log(cache.spacePerPearl);

    for (let i = 0; i < numberPearls; i++) {
        let pearl = $(`<div class="pearl"></div>`);
        cache.container.append(pearl);
        cache.elements.push(pearl);
        console.log(cache.containerWidth);
    }

    updateView();


    $(window).resize(function () {
        updateValues();
        updateView();
    });

})(jQuery);