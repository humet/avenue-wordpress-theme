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
      autoplaySpeed: 10000,
      arrows: false,
    });
      
  },
};
