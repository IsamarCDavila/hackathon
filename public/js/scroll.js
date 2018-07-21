(function($) {
    $(function() {
      $(window).scroll(function() {
        var logo = $('.header .logo-main');
        var topPos = $(this).scrollTop();
        if (topPos > 80) {
          $('.scroll-top').css("opacity", "1");
          logo.removeClass('max');
  				logo.addClass('min');
        } else {
          $('.scroll-top').css("opacity", "0");
          logo.addClass('max');
  				logo.removeClass('min');
        }
      });
        // scrollTo Function
        $.fn.scrollTo = function(anchor) {
            $('html, body').stop().animate({
                scrollTop: $(anchor).offset().top
            }, 1000, 'linear');
        };
        // Scroll top
           $('.scroll-top').click('click', function(event) {
                   $('html, body').animate({
                     scrollTop: $("#container-sanfer").offset().top }, 1000,'linear');
                     console.log($("#container-sanfer").offset().top);
           });
    });
})(jQuery);
