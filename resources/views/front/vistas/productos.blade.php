@extends('app.appfront')
<?php
$title = 'Producto - San Fernando';
?>
@section('style')
@endsection
@section('script')
@endsection
<!-- /.heading-->
@section('content')
<div id="container-sanfer" class="container-sanfer">
  @include('front.includes.header')
  <div class="row cont-cabecera row-nomargin">
    <div class="main-text-cont">
      <h1 class="tit-cabecera">Agencias</h1>
      <p class="parraf-cabecera">Conoce todos nuestras agencias certificadas.</p>
    </div>
  </div>
<!--inicio modal-->
  <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="videoModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <div>
                    <iframe width="100%" height="400px" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen class="embed-responsive-item" src="" frameborder="0"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!--fin modal-->
<div class="producto-cont">
  @include('front.includes.lineaProducto')
</div>
  @include('front.includes.footer')
</div>
  <script type="text/javascript">
    function setActive(){
      var path = document.location.href.split('#')[1];
      $(".tabs-productos").children().find('a').each(function () {
           if ('#'+path==$(this).attr('href')) {
                $('a[href="#'+path+'"]').click();
           }
       });
      var posicion_boton = $(".producto-cont").offset().top+60;
      $("html, body").animate({scrollTop:posicion_boton+"px"});
    }
window.onload = setActive;
</script>

@endsection
