export default {
  init() {
    // JavaScript to be fired on all pages
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired

    $(window).scroll(function() {    
      var scroll = $(window).scrollTop();
  
        if (scroll >= 900) {
            //clearHeader, not clearheader - caps H
            $('.header').addClass('scroll');
          } else {
            $('.header').removeClass('scroll');
        }
      });
  },
};
