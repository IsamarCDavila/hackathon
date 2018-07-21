$(document).ready(function() {


  // function to check when element scrolls into view (true/false)
  function isScrolledIntoView(elem)
  {
              if (elem == null) {
                  return;
              }
    var docViewTop = $(window).scrollTop();
    var docViewMiddle = docViewTop + (0.5 * $(window).height());
    var docViewBottom = docViewTop + $(window).height();
    var elemTop = $(elem).offset().top;
    var elemBottom = elemTop + $(elem).height();
    //return ((elemBottom >= docViewTop) && (elemTop <= docViewBottom));
    return ((elemBottom >= docViewMiddle) && (elemTop <= docViewMiddle));
  }

  // calculate the amount (in px) an element has scrolled above the fold (within boundaries)
  function getElementHeightAboveFold(elem)
  {
    var docViewTop = $(window).scrollTop();
    var docViewBottom = docViewTop + $(window).height();
    var elemTop = $(elem).offset().top;
    var elemHeight = $(elem).height();
    return Math.min((elemHeight + $(window).height()), Math.max((docViewBottom - elemTop), 0));
  }

  // calculate the amount (in px) an element has scrolled above the top of the viewport
  function getElementHeightAboveTop(elem)
  {
    var docViewTop = $(window).scrollTop();
    var elemTop = $(elem).offset().top;
    return (docViewTop - elemTop);
  }

  // temp function to report something on screen
  function reportValue(str) {
    $('a[href^="#home"]').text(str);
  }


  // highlight the link in the menu
  function scrollMenuActive() {

    $('nav ul li a[href^="#"]').each(function() {

      var btn = $(this);

      if (isScrolledIntoView(btn.attr('active'))) {
        btn.closest('li').addClass('active');
      } else {
        btn.closest('li').removeClass('active');
      }

    });
  }
  // have this function fire on scroll/load
  $(window).bind('load scroll', $.throttle(100, scrollMenuActive));



  //created this for easy generation of frames
  function buildHistoryFramesArray(height, padding, slides) {
    //increment between slides
    var increment = ((height - (padding * 2)) / slides);
    //where to start - used as an incrementer?
    var start = padding - increment;
    //whats returned
    var frameArray = new Array();
    for (i = 0; i < slides; i++) {
      var frame = new Array();
      frame[0] = 'frame' + (((i + 1) < 10) ? '0' : '') + (i + 1);
      frame[1] = start;
      frame[2] = (i < (slides - 1)) ? (frame[1] + increment) : height;
      //increment starter
      start = frame[2];
      //append to outer array
      frameArray[i] = frame;
    }
    return frameArray;
  }

  //cache the history frames into a var (not called everytime the page is scrolled)
  var historyFrames = buildHistoryFramesArray(4800, 1000, 32);

  // assign CSS classes on scroll (then let CSS transitions do the animation)
  function scrollAnimate() {

    // assignClassByNumber(
    // 		$('#history'), // pass the jQuery object we're animating
    // 		getElementHeightAboveFold($('#history')),
    // 		historyFrames
    // 		);

    assignClassByNumber(
        $('#timeline-2010 h3'), // pass the jQuery object we're animating
        getElementHeightAboveFold($('#timeline-2010 h3')), // pass the current (relative) scroll position
        [
          ['popped', 300, 99999] // the 'script' array [ css class, scroll start pos, scroll end pos]

        ]
        );
    assignClassByNumber(
        $('#timeline-2013 h3.h3_ball_red_one'), // pass the jQuery object we're animating
        getElementHeightAboveFold($('#timeline-2013 h3.h3_ball_red_one')), // pass the current (relative) scroll position
        [
          ['popped_ball_red_one', 100, 99999] // the 'script' array [ css class, scroll start pos, scroll end pos]

        ]
        );
    assignClassByNumber(
        $('#timeline-2013 h3.h3_ball_red_two'), // pass the jQuery object we're animating
        getElementHeightAboveFold($('#timeline-2013 h3.h3_ball_red_two')), // pass the current (relative) scroll position
        [
            ['popped_ball_red_two', 100, 99999] // the 'script' array [ css class, scroll start pos, scroll end pos]

        ]
        );
        assignClassByNumber(
            $('#timeline-2014 h3.h3_ball_red_three'), // pass the jQuery object we're animating
            getElementHeightAboveFold($('#timeline-2014 h3.h3_ball_red_three')), // pass the current (relative) scroll position
            [
                ['popped_ball_red_three', 100, 99999] // the 'script' array [ css class, scroll start pos, scroll end pos]

            ]
            );

    assignClassByNumber(
        $('#timeline-2014 h3'), // pass the jQuery object we're animating
        getElementHeightAboveFold($('#timeline-2014 h3')), // pass the current (relative) scroll position
        [
          ['popped', 300, 99999] // the 'script' array [ css class, scroll start pos, scroll end pos]

        ]
        );
    assignClassByNumber(
        $('#timeline-2010 img.img-uno'), // pass the jQuery object we're animating
        getElementHeightAboveFold($('#timeline-2010 img.img-uno')), // pass the current (relative) scroll position
        [
          ['popped', 200, 99999] // the 'script' array [ css class, scroll start pos, scroll end pos]

        ]
        );
    assignClassByNumber(
        $('#timeline-2010 img.img-dos'), // pass the jQuery object we're animating
        getElementHeightAboveFold($('#timeline-2010 img.img-dos')), // pass the current (relative) scroll position
        [
          ['popped1', 100, 99999] // the 'script' array [ css class, scroll start pos, scroll end pos]
          ]
        );

    assignClassByNumber(
        $('#timeline-2010 img.img-tres'), // pass the jQuery object we're animating
        getElementHeightAboveFold($('#timeline-2010 img.img-tres')), // pass the current (relative) scroll position
        [
          ['popped1', 100, 99999] // the 'script' array [ css class, scroll start pos, scroll end pos]
          ]
        );
    assignClassByNumber(
        $('#timeline-2013 img.2013-one-img'), // pass the jQuery object we're animating
        getElementHeightAboveFold($('#timeline-2013 img.2013-one-img')), // pass the current (relative) scroll position
        [
          ['popped_one_img', 100, 99999] // the 'script' array [ css class, scroll start pos, scroll end pos]
        ]
        );
    assignClassByNumber(
        $('#timeline-2013 img.2013-two-img'), // pass the jQuery object we're animating
        getElementHeightAboveFold($('#timeline-2013 img.2013-two-img')), // pass the current (relative) scroll position
        [
          ['popped_two_img', 200, 99999] // the 'script' array [ css class, scroll start pos, scroll end pos]
        ]
        );
    assignClassByNumber(
        $('#timeline-2013 img.2013-three-img'), // pass the jQuery object we're animating
        getElementHeightAboveFold($('#timeline-2013 img.2013-three-img')), // pass the current (relative) scroll position
        [
          ['popped_three_img', 200, 99999] // the 'script' array [ css class, scroll start pos, scroll end pos]
        ]
        );
    // assignClassByNumber(
    // 		$('#timeline-2014 img'), // pass the jQuery object we're animating
    // 		getElementHeightAboveFold($('#timeline-2014 img')), // pass the current (relative) scroll position
    // 		[
    // 			['popped', 200, 99999] // the 'script' array [ css class, scroll start pos, scroll end pos]
    //
    // 		]
    // 		);
  }

  // have this function fire on scroll
  $(window).bind('scroll', $.throttle(20, scrollAnimate));


  // assign CSS class to element when specified number is within given range
  function assignClassByNumber(elem, num, classRangeArray) {

    // start by removing any classes previously assigned by this function
    for (var c = 0; c < classRangeArray.length; c++) {
      elem.removeClass(classRangeArray[c][0]);
    }

    // check each key
    for (var i = 0; i < classRangeArray.length; i++) {

      // check number is in range for this key
      if ((num >= classRangeArray[i][1]) && (num <= classRangeArray[i][2])) {

        // assign the given value as a CSS class and quit
        elem.addClass(classRangeArray[i][0]);
        break;

      }
    }
  }
  // reveal news section on hover
  $('#news').hover(
      function() {
        $(this).removeClass('closed');
      },
      function() {
        $(this).addClass('closed');
      }
  );

  // show news section on click
  $('#news').click(
      function() {
        $(this).toggleClass('show');
        $(this).addClass('closed');
      });

  // offset the top margin of elements by a proportion of the scroll (parallax)
  function scrollParallax() {
    $('#timeline-2010 .parallax').css({'margin-top': Math.round(getElementHeightAboveFold($('#timeline-2010')) / -2.4) + 'px'});
    $('#timeline-2013 .parallax').css({'margin-top': Math.round(getElementHeightAboveFold($('#timeline-2013')) / -2.4) + 'px'});
    $('#timeline-2014 .parallax').css({'margin-top': Math.round(getElementHeightAboveFold($('#timeline-2014')) / -2.0) + 'px'});
  }
  // have this function fire on scroll/load
  $(window).bind('scroll load', $.throttle(20, scrollParallax));


  //align social vertically
  $(window).resize(function() {
    socialAlign();
    setGalleryHeight();
    setCarouselWidth();
    setVoiceHeight();
  });

  function socialAlign() {
    var social = $('section.social');
    social.css('top', ($(window).height() / 2) - (social.height() / 2));
  }

  socialAlign();

  //set gallery to height of window
  function setGalleryHeight() {
    $('#gallery').height($(window).height());
  }

  setGalleryHeight();

  //set width of carousel

  function setCarouselWidth() {
    $('.jcarousel').width($(window).width() - $('.image-description').width() - 300);
  }

  setCarouselWidth();

  //set height of voice area

  function setVoiceHeight() {
    $('section.voice').height($('#gallery-holder').outerHeight(true) - $('.image-detail').outerHeight(true) - 145);
  }

  setVoiceHeight();

  //links to floor plan

  $(document).on('click', '*[data-floor]', function(e) {
    e.preventDefault();
    var target = $('#building');

    var anchorOffset = 0; /* a value of zero will scroll element to top of viewport */
    var targetScrollPos = $(target).offset().top - anchorOffset; // the target scroll position
    var maxScrollPos = $(document).height() - $(window).height() // can't scroll beyond here cos window height
    targetScrollPos = Math.max(0, Math.min(targetScrollPos, maxScrollPos)); // not negative, not more than the max
    var t = (Math.abs(targetScrollPos - $(window).scrollTop()) * 0.75); // calc a time to reach target, from current pos
    $('html, body').animate({scrollTop: targetScrollPos}, t, 'easeInOutQuad', function() {
      $('a[data-floor-link=' + $(e.target).attr('data-floor') + ']').click();
    }); // do the scroll
  });
});
// script responsabilidad social
$('.cont-span').children().click(function(){
  $(".contenido_responsabilidad").css("display","none");
var ruta= $(this).text();
if(ruta== 'Gestión Ambiental')
{
  ruta= 'Gestion';
}


$('#'+ruta).css('display','block');
$('#'+ruta).addClass('animated fadeIn');
$('#'+ruta).find('button').click(function(){
    $('#'+ruta).removeClass('animated fadeIn');
    $('#'+ruta).fadeOut( "slow" )
  });

  $('body,html').stop(true,true).animate({
    scrollTop: $("#"+ruta).offset().top
  },1000);
});
