export default {
  init() {
    // JavaScript to be fired on the home page
  },
  finalize() {

    $('.animated-words').slick({
      infinite: true,
      speed: 500,
      fade: true,
      cssEase: 'linear',
      autoplay: true,
      autoplaySpeed: 2000,
    });
      
  },
};
