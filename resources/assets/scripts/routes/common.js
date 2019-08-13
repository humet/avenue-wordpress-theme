export default {
  init() {
    // JavaScript to be fired on all pages
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired

    $('.mobile-nav-button').click(function() {
      $('#nav-icon2').toggleClass('open');
      $('.mobile-nav-overlay').toggleClass('show');
      $('body').toggleClass('no-scroll');
  });

  $('.consent-text').click(function() {
    $('.consent-overlay').addClass('show');
    $('body').addClass('no-scroll');
});

$('.consent-overlay .cross').click(function() {
  $('.consent-overlay').removeClass('show');
  $('body').removeClass('no-scroll');
});

  },
};
