@include('front.includes.scroll-top')
<div class="hero-pavo bloque_1" role="banner">
  <div class="hero-container">
    <h1 class="titulo_db"></h1>
    <p class="descripcion_db"></p>
    <div class="btn-canjear">
      <a class="btn-red" href="#" id="btn-canjear"></a>
    </div>
  </div>
  <div class="overlay"></div>
</div><!-- header role="banner" -->

<script src="<?php echo URL::asset('js/scroll.js'); ?>" type="text/javascript"></script>
<script type="text/javascript">
$('.ancla').on('click', function(e){
e.preventDefault();
var strAncla = '#' + $(this).data('ancla');
$('html,body').animate({scrollTop: $(strAncla).offset().top}, 2000);
});
</script>
<script type="text/javascript">
  function setActive(){
    var path = document.location.href;
      $('.navbar-nav li').find('a').each(function () {
          if (path==$(this).attr('href')) {
            // $(this).removeClass("no-underline");
            $(this).addClass("blue-underline");
          }
      });
  }
  window.onload = setActive;
</script>
