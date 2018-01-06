jQuery(window).load(function () {
  jQuery('.flexslider').flexslider({
    animation: 'slide',
    controlNav: false,
    directionNav: false,
    slideshowSpeed : 5000
  })

  jQuery('.flexslider-introducing').flexslider({
    animation: "slide",
    animationLoop: false,
    itemWidth: 380,
    itemMargin: 30,
    controlsContainer: $(".custom-controls-container"),
    customDirectionNav: $(".custom-navigation a")
  })

  jQuery('.flexslider-videos').flexslider({
    animation: "slide",
    animationLoop: false,
    controlsContainer: $(".custom-controls-container-videos"),
    customDirectionNav: $(".custom-navigation-videos a")
  })

  jQuery('.flexslider-concert').flexslider({
    animation: 'slide',
    controlNav: false,
    directionNav: false,
    slideshowSpeed : 8000
 })
 })
jQuery(document).ready(function (event) {
  jQuery('.learn-more-button').on('click', function () {
    jQuery('.popup').fadeIn(300)
  })

  jQuery('.close-popup').on('click', function () {
    jQuery('.popup').fadeOut(200)
  })
})