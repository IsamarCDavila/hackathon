<div class="lineaProducto">
  <div class="row row-nomargin row-global">
    <!-- <div class="col-lg-1 col-sm-1 hidden-xs"></div> -->
    <div class="col-lg-12 col-sm-12 col-xs-12 col-nopadding">
      <div class="cont-linprod">
      <!-- Tabs linea de productos-->
      <ul class="nav nav-tabs tabs-productos">
        @foreach ($productos as $producto)
        <li>
          <a class="txt-productos" href="{!!url('/detalle-producto/'.$producto->slug)!!}">
            <div class="cont-img-prod"><img src="{!!url($producto->icono_path)!!}" alt="icono porducto San Fernando" class="img-responsive img-producto svg"/></div>
            {!!$producto->nombre!!}
          </a>
          <span class="triangulo"></span>
        </li>
        @endforeach
      </ul>

      <!-- Fin Tabs linea de productos -->
    </div>
    </div>
  </div>

    <!-- <div class="col-md-1 hidden-xs"></div> -->
  </div>

<script type="text/javascript">


// $(document).ready(function(){
//   $(".tabs-productos").children().click(function(){
//   var href_one= $(this).find('a').attr('href');
//   var href= href_one.split('#');
//
//   var pathname = window.location.pathname;
//   var res = pathname.split("/");
//   var url='productos.php';
//   window.location.href ='/'+res[1]+'/../'+url+'?href='+href_one;
//   });
//
// });
jQuery('img.svg').each(function(){
           var $img = jQuery(this);
           var imgID = $img.attr('id');
           var imgClass = $img.attr('class');
           var imgURL = $img.attr('src');

           jQuery.get(imgURL, function(data) {
               // Get the SVG tag, ignore the rest
               var $svg = jQuery(data).find('svg');

               // Add replaced image's ID to the new SVG
               if(typeof imgID !== 'undefined') {
                   $svg = $svg.attr('id', imgID);
               }
               // Add replaced image's classes to the new SVG
               if(typeof imgClass !== 'undefined') {
                   $svg = $svg.attr('class', imgClass+' replaced-svg');
               }

               // Remove any invalid XML tags as per http://validator.w3.org
               $svg = $svg.removeAttr('xmlns:a');

               // Replace image with new SVG
               $img.replaceWith($svg);

           }, 'xml');

       });
</script>
