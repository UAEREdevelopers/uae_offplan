$(function() {

	if ( $('.owl-carousel').length > 0 ) {
        $('.owl-carousel').owlCarousel({
            center: false,
            items: 1,
            loop: true,
            stagePadding: 0,
            margin: 20,
            // smartSpeed: 75000,

            autoplay: true,
            autoplayTimeout:15000,
            autoplayHoverPause:true,

            nav: true,
            dots: true,
            pauseOnHover: true,
            lazyLoad:true,
            responsive:{
                600:{
                    margin: 20,
                    nav: true,
                  items: 1
                },
                1100:{
                    margin: 20,
                    stagePadding: 0,
                    nav: true,
                  items: 3
                }
            }
        });            
    }

})