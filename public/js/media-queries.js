var mq767 = window.matchMedia('(max-width:767px)');

$(document).ready(function(){
    mediaQueries();
    $(window).resize(function(){
      mediaQueries();
    });
});

function mediaQueries(){
    if(mq767.matches)
      {
        $('div.collapse').attr('id', 'navbar-collapse');
        $("#vale-pavo").detach().appendTo("#tipo-valepavo");
        $("#vale-paneton").detach().appendTo("#tipo-valepaneton");
        $(".item-title-pavo").detach().appendTo(".item-pavo");
        $(".item-title-paneton").detach().appendTo(".item-paneton");
        $(".timeline").detach().appendTo(".title-cotizacion");
        $(".title-cotizacion").addClass('cd-horizontal-timeline');
        $(".filtro").detach().insertBefore(".info-location");
        $('.logo-min').fadeOut(2000);
      }
      // else
      // {
      //
      // }
    };
