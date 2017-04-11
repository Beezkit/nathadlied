$( document ).ready(function() {

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

});
