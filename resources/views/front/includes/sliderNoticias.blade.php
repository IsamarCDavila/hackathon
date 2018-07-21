<!-- BEGIN NOTICIAS-->
<section class="slider slider-noticias">
  @foreach ($noticias as $noticia)
   <a href="{!!url('/noticias')!!}">
    <div class="noticias">
    <img src="{!!url($noticia->path_imagen)!!}" alt="noticia San Fernando" class="img-responsive">
    <div class="txtnoticia">
      <div class="txtnoticia-cont">
        <p class="parraf-blanco12">{!!$noticia->intro!!}</p>
      </div>
    </div>
  </div>
 </a>
@endforeach
</section>
