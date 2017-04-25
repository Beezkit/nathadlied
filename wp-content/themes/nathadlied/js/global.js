$( document ).ready(function() {

    var url = window.location.href;
    var splitUrl = url.split('/');
    var menuOpen = false;

    $('.burger-menu').on('click', function() {
        if (menuOpen === false) {
            $(this).addClass('activ');
            $('nav').addClass('activ');
            menuOpen = true;
        } else if (menuOpen === true) {
            $(this).removeClass('activ');
            $('nav').removeClass('activ');
            menuOpen = false;
        }
    });

    $('#menu-top li a').each(function(i,v){
        if ($(this).text().toLowerCase() == splitUrl['3']) {
            $(this).parent().addClass('current');
        }
    });

    $('.owl-carousel').owlCarousel({
        loop: true,
        nav: true,
        navText: ['<i class="fa fa-chevron-left" aria-hidden="true"></i>','<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
        dots: false,
        autoPlay: 1000, //Set AutoPlay to 1 seconds
        items: 4,
        mouseDrag: false,
        margin: 20,
        responsive : {
            0 : {
                items: 2
            },
            768 : {
                items: 3
            },
            992 : {
                items: 4
            }
        }
    });

    $('.grid').masonry({
        // options
        itemSelector: '.content-print', // use a separate class for itemSelector, other than .col-
        columnWidth: '.content-print',
        percentPosition: true
    });

    $('.block-img img').on('click', function(){
        $.fancybox({
            href : $(this).attr('src'),
            helpers : {
                overlay: {
                    css: {'background': 'rgba(0, 0, 0, 0.8)'} // or your preferred hex color value
                } // overlay
            }
        });
    });

    $('.scroll-bot').on('click', function() { // Au clic sur un élément
		var speed = 1500; // Durée de l'animation (en ms)
        var page = $('#nath');
        $('html, body').animate( {
            scrollTop: $(page).offset().top
        }, speed, 'swing', function(){}); // Go
	});

});
