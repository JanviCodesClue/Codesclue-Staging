// अगर function चाहिए तो define करें
function initScrollToTop() {
  jQuery(window).scroll(function() {
    if (jQuery(this).scrollTop() > 100) {
      jQuery('#scrollTopBtn').fadeIn();
    } else {
      jQuery('#scrollTopBtn').fadeOut();
    }
  });

  jQuery('#scrollTopBtn').click(function() {
    jQuery('html, body').animate({scrollTop: 0}, 600);
    return false;
  });
}
