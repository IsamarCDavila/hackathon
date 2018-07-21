
/*-------------------CAROUSEL--------------------*/
$(document).ready(function(){
$('a[href="#mito1"]').click();
function click_in_button(selector){
  $(selector).find('button').click(function(){
    $(selector).find('.mito-cont').removeClass('bounceInDown')
    $(selector).find('.mito-cont').addClass('fadeOutUp');
    $(selector).find('.mito-cont').css('display','none');
    $(selector).find('.verdad-cont').removeClass('fadeOutUp');
    $(selector).find('.verdad-cont').css('display','block');
    $(selector).find('.verdad-cont').addClass('bounceInDown')
  });
}
click_in_button('#mito1');
click_in_button('#mito2');
click_in_button('#mito3');
click_in_button('#mito4');

function click_in_arrow(selector){
  $(selector).find('i').click(function(){
    $(selector).find('.verdad-cont').removeClass('bounceInDown');
    $(selector).find('.verdad-cont').addClass('fadeOutUp');
    $(selector).find('.verdad-cont').css('display','none');
    $(selector).find('.mito-cont').removeClass('fadeOutUp');
    $(selector).find('.mito-cont').addClass('bounceInDown');
    $(selector).find('.mito-cont').css('display','block');
  });
}
click_in_arrow('#mito1');
click_in_arrow('#mito2');
click_in_arrow('#mito3');
click_in_arrow('#mito4');


$("#myCarouselhome").find(".item").first().addClass("active");
$("#myCarouselhome").find(".indicador").first().addClass("active");

$("#myCarouselhomeimagen").find(".item").first().addClass("active");


$(function(){

    $('.botones-avanzar button').click(function(e){
        e.preventDefault();
        console.log("avanzar...");
        $('#myCarouselhome').carousel( $(this).data() );
        $('#myCarouselhomeimagen').carousel( $(this).data() );
    });

});//END document.ready
    AOS.init({
      offset: 200,
      duration: 1500,
      delay: 50,
      disable: 'mobile',
    });
});
