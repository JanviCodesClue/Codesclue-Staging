jQuery(document).ready(function($){
    // Check if section exists
    if ($("#dynamicCarousel").length) {
        if ($("#dynamicCarousel .custom-card-project").length > 2) {
            $("#dynamicCarousel").owlCarousel({
                loop: true,
                margin: 20,
                nav: false,   // ❌ prev/next buttons hide
                dots: false,  // ❌ dots hide
                nav: true,
                dots: true,
                autoplay: true,
                autoplayTimeout: 3000,
                responsive:{
                  0:{ items:1 },
                  991:{ items:2 },
                  1000:{ items:2 }
                }
            });
        } else {
            $("#dynamicCarousel").removeClass("owl-carousel owl-theme");
            $("#staticLayout").removeClass("d-none");
        }
    }
});
