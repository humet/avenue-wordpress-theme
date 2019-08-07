export default {
  init() {
    // JavaScript to be fired on the home page
  },
  finalize() {

    $('.animated-words').slick({
      infinite: true,
      fade: true,
      cssEase: 'linear',
      autoplay: true,
      autoplaySpeed: 1000,
      arrows: false,
    });

    $('.quotes-block').slick({
      infinite: true,
      fade: true,
      cssEase: 'linear',
      autoplay: true,
      autoplaySpeed: 5000,
      arrows: false,
    });

    $('.play-button').click(function() {
      $('.video-overlay').addClass('show');
      $('body').addClass('no-scroll');
  });

  $('.play-button-casse-study').click(function() {
    $('.video-overlay-casse-study').addClass('show');
    $('body').addClass('no-scroll');
});

  $('.video-overlay .cross').click(function() {
    $('.video-overlay').removeClass('show');
    $('body').removeClass('no-scroll');
  });

  $('.video-overlay-casse-study .cross').click(function() {
    $('.video-overlay-casse-study').removeClass('show');
    $('body').removeClass('no-scroll');
  });
      
  },
};
