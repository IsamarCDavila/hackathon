$(document).ready(function(e) {

  $(window).resize(function(){
      $('#menu-topo').hide();
  });

  $('.nav a').on('click', function(){
      $('.btn-navbar').click();
      $('.navbar-toggle').click()
  });
//burger menu vale de pavo
  $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#navbar-collapse").toggleClass("active-block");
      var navbarCollapsed=$("#navbar-collapse").hasClass("active-block");
      if(navbarCollapsed){
        $(".navbar-toggle ").addClass("change");
        $(".icon-bar").addClass("bg-white");
        $(".menu-label").addClass("txt-white");
        // logo.addClass('max');
        // logo.removeClass('min');
      }else{

        $(".navbar-toggle ").removeClass("change");
        $(".icon-bar").removeClass("bg-white");
        $(".menu-label").removeClass("txt-white");
      }
  });

  //fixed-nabvar vale de pavo
    navScroll();

//scroll vale de pavo
    var $root = $('html, body');

    $('.nav-links a[href$="canjear"]').click(function() {
         var href = $.attr(this, 'href');
          if($(window).scrollTop()==0){
           $root.animate({
               scrollTop:        $("#s-canjear").offset().top+110
           }, 1000);
          }
          else {
            $root.animate({
                scrollTop:        $("#s-canjear").offset().top-90
            }, 1000);
          }
     });
    $('.nav-links a[href$="cotizar"]').click(function() {
      var href = $.attr(this, 'href');
      if($(window).scrollTop()==0){
        $root.animate({
            scrollTop:        $("#s-cotizar").offset().top+150
        }, 1000);
      }
    else  {
          $root.animate({
              scrollTop:        $("#s-cotizar").offset().top-70
          }, 1000);
        }
   });

  $('.nav-links a[href$="beneficios"]').click(function() {
       var href = $.attr(this, 'href');
      if($(window).scrollTop()==0){
            $root.animate({
               scrollTop:        $("#s-pavicar").offset().top+70
            }, 1000);
        }
        else {
            $root.animate({
                scrollTop:        $("#s-pavicar").offset().top-140
            }, 1000);
        }
   });

  $('.nav-links a[href$="recetas"]').click(function() {
    // console.log($("#s4").offset().top);
     var href = $.attr(this, 'href');

        if($(window).scrollTop()==0){
           $root.animate({
               scrollTop:        $("#s-recetas").offset().top+120
           }, 1000);
      }
      else{
          $root.animate({
              scrollTop:        $("#s-recetas").offset().top-98
          }, 1000);
        }
   });


  $(function(){
        $('.carousel').carousel({
          interval: 3500
        });
    });

  // Fixes the prev/next links of the sliders
$('.carousel-control.left').click(function(e) {
  e.stopPropagation();
  $('.js-carousel').carousel('prev');
  return false;
});

$('.carousel-control.right').click(function(e) {
  e.stopPropagation();
  $('.js-carousel').carousel('next');
  return false;
});
  // $('.container-menu').stickToTop();
  // $('#menu-topo').stickToTop();
  $(window).scroll(function () {
    navScroll();
      if ($(this).scrollTop() > 80) {
        $(".lista-collapse").css("background-color", '#b12f2f');
        $(".menu-label").css("color", '#b12f2f');
        $("#abre-menu-topo").addClass("rspv-menu");
      } else {
        $(".lista-collapse").css("background-color", '#a4a4a4');
        $(".menu-label").css("color", '#a4a4a4');
        $(".btn-collapse").css("background-color", 'transparent');
        $("#abre-menu-topo").removeClass("rspv-menu");
      }
  });


  $('#menu-topo').hide();
    var menuaberto = false;
   $('.btn-collapse').click(function(event) {
     event.preventDefault();
      $("#menu-topo").animate({
        width: "toggle"
      });
       if(menuaberto == true){
         menuaberto = false;
         $("body").css('position','relative');
         $(".lista-collapse:nth-child(1)").removeClass('botao-lista-cima');
         $(".lista-collapse:nth-child(2)").removeClass('hidden');
         $(".lista-collapse:nth-child(3)").removeClass('botao-lista-baixo');
         $(".lista-collapse").removeClass('listaazul');
         $(".en").css('opacity','0');
         $(".es").css('opacity','0');
         $(".en").css('transition','all 0s');
         $(".es").css('transition','all 0s');
         $(".menu-label").css('opacity','1');
         $(".overlay").css('opacity','0.77');
         $(".overlay").css('background-image','linear-gradient(to left, #0051b0, #002878)');
         $(".lang-activo").removeClass('langazul');
         $(".redes-sociales").addClass('hidden');
         $("#menu-main").children().removeClass("animated slideInLeft");
        $("#menu-topo").removeClass('open');
         $('#fondo-azul').removeClass('backdrop_azul');

       }else {
         menuaberto = true;
         $("body").css('position','fixed');
         $(".lista-collapse:nth-child(1)").addClass('botao-lista-cima');
         $(".lista-collapse:nth-child(2)").addClass('hidden');
         $(".lista-collapse:nth-child(3)").addClass('botao-lista-baixo');
         $(".lista-collapse").addClass('listaazul');
         $(".en").css('opacity','1');
         $(".es").css('opacity','1');
         $(".en").css('transition','all 1s');
         $(".es").css('transition','all 1s');
         $(".menu-label").css('opacity','0');
         $(".overlay").css('opacity','0.26');
         $(".overlay").css('background-color','000000');
         $(".lang-activo").addClass('langazul');
         $(".redes-sociales").removeClass('hidden');
         $("#menu-main").children().removeClass("animated fadeOut");
        $("#menu-topo").addClass('open');
         $('#fondo-azul').addClass('backdrop_azul');
       }
     });
   $("html").click(function() {
     if(menuaberto == true){
       $('.btn-collapse').click();
     }
   });
   $('#menu-topo').click(function (e) {
       e.stopPropagation();
   });
   $('.container-menu').click(function (e) {
       e.stopPropagation();
   });
   $('.cont-slider').click(function (e) {
       e.stopPropagation();
   });

   // toggle para receta detalle
   $("#open-recipe").click(function(){
    $(".recipe-container").slideToggle( "slow");
  });
  $("#close-recipe").click(function(){
      $(".recipe-container").hide("slow");
  });

 // toggle para receta detalle vale depavo

  $(".close-pavo-recipe").click(function(){
      $(".modal-overlay").hide("");
      $('.home-container').removeClass('hidden');
     $('.home-container').addClass('shown');
     scrollToAnchor('recetas');
  });

 $("#descongela" ).click(function() {
   $(".descongela-pavo").show("");
   $('.home-container').addClass('hidden');
 });
 $("#chef-tips" ).click(function() {
   $(".chef-tips").show("");
   $('.home-container').addClass('hidden');
 });
 $("#pavo-criollo" ).click(function() {
   $(".pavo-criollo").show("");
   $('.home-container').addClass('shown');
   $('.home-container').addClass('hidden');
 });
 $("#pavo-hierbas" ).click(function() {
   $(".pavo-hierbas").show("");
   $('.home-container').addClass('shown');
   $('.home-container').addClass('hidden');
 });
 $("#pavo-chiclayana" ).click(function() {
   $(".pavo-chiclayana").show("");
   $('.home-container').addClass('shown');
   $('.home-container').addClass('hidden');
 });
 $("#pavo-arequipeño" ).click(function() {
   $(".pavo-arequipeño").show("");
   $('.home-container').addClass('shown');
   $('.home-container').addClass('hidden');
 });
 $("#pavo-chifa" ).click(function() {
   $(".pavo-chifa").show("");
   $('.home-container').addClass('shown');
   $('.home-container').addClass('hidden');
 });
// toggle para formulario contacto
 $(".close-formContacto").click(function(){
     $("#contacto-valepavo").hide("");
     $('.home-container').removeClass('hidden');
    $('.home-container').addClass('shown');
    scrollToAnchor('cinco');
 });
 $(".btn-contact-header").click(function(){
     $("#contacto-valepavo").show("");
     $('.home-container').addClass('hidden');
 });
 // toggle book form -- underage
  $('#btn-underage').click(function(e) {
    $('#underage-cont').toggleClass('active');
    e.preventDefault();
  });

//toggle underage
  $("input[name='radio']").change(function() {
    var status = $(this).val();
    if (status != 2) {
        $("#underage-cont").show("slow");
    } else {
        $("#underage-cont").hide("slow");
    }
  });
});

function navScroll(){
  var fixed_menu = $('#navbar-primary');
  if ($(this).scrollTop() > 80) {
      fixed_menu.addClass("navbar-fixed-top");
      $('.canjear-container').css('margin-top', '200px');
  } else {
      fixed_menu.removeClass("navbar-fixed-top");
      $('.canjear-container').css('margin-top', '0');
  }
}
function scrollToAnchor(aid){
    var aTag = $("a[name='"+ aid +"']");
    $('html,body').animate({scrollTop: aTag.offset().top - (50)},'slow');
}
$("#ver-cotizacion").click(function() {
  scrollToAnchor('cotizar');
});

$("#btn-canjear").click(function() {
  scrollToAnchor('cotizar');
});
