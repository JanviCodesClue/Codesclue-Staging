// jQuery(document).ready(function($){
//     $(window).on('scroll', function(){
//         var scrolled = $(window).scrollTop();
//         $('.parallax').each(function(){
//             var speed = parseFloat($(this).data('speed')) || 0.5;
//             var yPos = -(scrolled * speed);
//             $(this).css('background-position', 'center ' + yPos + 'px');
//         });
//     });
// });
    // Call counter function on scroll
    $(window).on('scroll', initCounterOnScroll);

    function initParallax() {
        $(window).on('scroll', function() {
            var scrolled = $(this).scrollTop();
            $('.parallax').each(function() {
                var speed = $(this).data('speed') || 0.5;
                var yPos = -(scrolled * speed);
                $(this).css('transform', 'translateY(' + yPos + 'px)');
            });
        });
    }
    if ($('.parallax').length) {
        initParallax();
    }