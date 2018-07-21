(function($){
  var plazaArmas = {
    titulo: 'Plaza de Armas',
    descripcion: 'El mas importante lugar para ver',
    location: {lat:-16.398739, lng:-71.536903}
  };
  var munanqui = {
    titulo: 'Munanqui',
    descripcion: 'Peruvian Tea. Es una Experiencia!',
    location: {lat: -16.396307, lng: -71.534284}
  };
  var santaCatalina = {
    titulo: 'Santa Catalina',
    descripcion: 'Increíble. Un poco costoso pero vale la pena',
    location: {lat: -16.395118, lng: -71.536798}
  };
  // Initialize the platform object: Necesita un app_id y app_code. Crea una cuenta en https://developer.here.com/
  var platform = new H.service.Platform({
  'app_id': '6UFukZ4CRKUMavfyK7zB',
  'app_code': 'vf3KRdRdTtv-InXo6xKT5g'
  });
  // Obtain the default map types from the platform object
  var maptypes = platform.createDefaultLayers();
  // Instantiate (and display) a map object:
  var map = new H.Map(
  document.getElementById('map3'),
  maptypes.normal.map,
  {
    zoom: 15,
    center: { lng: -71.535, lat: -16.39889 }
  });

  for(var i=0;i<puntos.length;i++){
    var diferente=true;
    if($("#filtro_ciudad > option").length==0){
      $("#filtro_ciudad")
        .append('<option id="'+tipo_s+'ciudad_'+puntos[i].lugar.toLowerCase().replace(' ', '_')+'">'+puntos[i].lugar+'</option>')
        .selectpicker('refresh');
    }else{
      $("#filtro_ciudad > option").each(function() {
          if(this.text == puntos[i].lugar){
            diferente=false;
          }
      });

      // if(diferente){
      //   $("#filtro_ciudad")
      //     .append('<option id="'+tipo_s+'ciudad_'+puntos[i].lugar.toLowerCase().replace(' ', '_')+'">'+puntos[i].lugar+'</option>').selectpicker('refresh');
      // }
    }

  }

    $("#filtro_ciudad").on('change', function () {
      // alert("holaaa");
      mostrarLugar(map,santaCatalina)
    });

    var mapObjects = [];
  function mostrarLugar(map, lugar){
    $('#title').html(lugar.titulo);
    $('#descripcion').html(lugar.descripcion);
    var marker = new H.map.Marker(lugar.location);
    map.removeObjects(mapObjects);
    mapObjects = [marker];
    map.addObjects(mapObjects);
  }

    //   $("#filtro_ciudad").on('change', function () {
    //       $('option', "#filtro_distrito").remove();
    //       $('option', "#filtro_categoria").remove();
    //       $("#filtro_categoria")
    //                 .append('<option>Seleccione lugar</option>')
    //                 .selectpicker('refresh');
    //       var d=$("#filtro_ciudad").find(":selected").text();
    //       $("#filtro_ciudad").find(":selected").trigger('click');
    //       for(var i=0;i<puntos.length;i++){
    //         var diferente=true;
    //         if(puntos[i].lugar == d){
    //           // console.log(puntos[i].distrito);
    //           if($("#filtro_distrito > option").length==0){
    //             $("#filtro_distrito")
    //                       .append('<option>Seleccione distrito </option><option  value='+puntos[i].place_id+ ' id="'+tipo_s+'distrito_'+puntos[i].distrito.toLowerCase().replace(' ', '_')+'">'+puntos[i].distrito+'</option>')
    //                       .selectpicker('refresh');
    //           }else{
    //             $("#filtro_distrito > option").each(function() {
    //
    //                 if(this.text == puntos[i].distrito){
    //                   diferente=false;
    //                 }
    //             });
    //             if(diferente){
    //               $("#filtro_distrito")
    //                         .append('<option value='+puntos[i].place_id+ ' id="'+tipo_s+'distrito_'+puntos[i].distrito.toLowerCase().replace(' ', '_')+'">'+puntos[i].distrito+'</option>')
    //                         .selectpicker('refresh');
    //             }
    //           }
    //         }
    //       }
    //
    //     });
    //
    //
    //
    //
    // $("#filtro_distrito").on('change', function () {
    //     // console.log("change");
    //     $('option', "#filtro_categoria").remove();
    //     var d=$("#filtro_distrito").find(":selected").text();
    //     $("#filtro_distrito").find(":selected").trigger('click');
    //     var array_distrito=[];
    //     for(var i=0;i<puntos.length;i++){
    //       if(puntos[i].distrito == d){
    //         $("#filtro_categoria")
    //                   .append('<option value='+puntos[i].type.slug+ ' id="'+tipo_s+puntos[i].name.toLowerCase().replace(' ', '_')+'">'+puntos[i].name+'</option>')
    //                   .selectpicker('refresh');
    //       }
    //     }
    //     // renderMap();
    //   });

})(jQuery)

//
// function initMap() {
//   var s = document.createElement("script");
//   $("head").append(s);
//   var markers = [];
//   // $('.selectpicker').selectpicker();
//
//   for(var i=0;i<puntos.length;i++){
//
//     var diferente=true;
//     if($("#filtro_ciudad > option").length==0){
//       $("#filtro_ciudad")
//         .append('<option id="'+tipo_s+'ciudad_'+puntos[i].lugar.toLowerCase().replace(' ', '_')+'">'+puntos[i].lugar+'</option>')
//         .selectpicker('refresh');
//     }else{
//       $("#filtro_ciudad > option").each(function() {
//           if(this.text == puntos[i].lugar){
//             diferente=false;
//           }
//       });
//
//       if(diferente){
//         $("#filtro_ciudad")
//           .append('<option id="'+tipo_s+'ciudad_'+puntos[i].lugar.toLowerCase().replace(' ', '_')+'">'+puntos[i].lugar+'</option>')
//           .selectpicker('refresh');
//
//       }
//     }
//
//   }
//
//
//     $("#filtro_ciudad").on('change', function () {
//         $('option', "#filtro_distrito").remove();
//         $('option', "#filtro_categoria").remove();
//         $("#filtro_categoria")
//                   .append('<option>Seleccione lugar</option>')
//                   .selectpicker('refresh');
//         var d=$("#filtro_ciudad").find(":selected").text();
//         $("#filtro_ciudad").find(":selected").trigger('click');
//         for(var i=0;i<puntos.length;i++){
//           var diferente=true;
//           if(puntos[i].lugar == d){
//             // console.log(puntos[i].distrito);
//             if($("#filtro_distrito > option").length==0){
//               $("#filtro_distrito")
//                         .append('<option>Seleccione distrito </option><option  value='+puntos[i].place_id+ ' id="'+tipo_s+'distrito_'+puntos[i].distrito.toLowerCase().replace(' ', '_')+'">'+puntos[i].distrito+'</option>')
//                         .selectpicker('refresh');
//             }else{
//               $("#filtro_distrito > option").each(function() {
//
//                   if(this.text == puntos[i].distrito){
//                     diferente=false;
//                   }
//               });
//               if(diferente){
//                 $("#filtro_distrito")
//                           .append('<option value='+puntos[i].place_id+ ' id="'+tipo_s+'distrito_'+puntos[i].distrito.toLowerCase().replace(' ', '_')+'">'+puntos[i].distrito+'</option>')
//                           .selectpicker('refresh');
//               }
//             }
//           }
//         }
//
//       });
//
//
//
//
//   $("#filtro_distrito").on('change', function () {
//       // console.log("change");
//       $('option', "#filtro_categoria").remove();
//       var d=$("#filtro_distrito").find(":selected").text();
//       $("#filtro_distrito").find(":selected").trigger('click');
//       var array_distrito=[];
//       for(var i=0;i<puntos.length;i++){
//         if(puntos[i].distrito == d){
//           $("#filtro_categoria")
//                     .append('<option value='+puntos[i].type.slug+ ' id="'+tipo_s+puntos[i].name.toLowerCase().replace(' ', '_')+'">'+puntos[i].name+'</option>')
//                     .selectpicker('refresh');
//         }
//       }
//       renderMap();
//     });
//
//
//
//   var pyrmont = new google.maps.LatLng(-11.9405234,-76.9438779);
//
//
//   var map = new google.maps.Map(document.getElementById('map3'), {
//     mapTypeId: google.maps.MapTypeId.ROADMAP,
//     center: pyrmont,
//     zoom: 11,
//     scrollwheel: false
//   });
//
//
//   var geocoder = new google.maps.Geocoder();
//
//   var place_markers = [];
//   var pt=puntos;
//
//     google.maps.event.addListener(map, 'bounds_changed', function() {
//       var bounds = map.getBounds();
//       for (var k = 0; k < place_markers.length; k++) {
//         var one_marker = place_markers[k];
//         if (!bounds.contains(one_marker.getPosition())) {
//           one_marker.setMap(null);
//         }
//       }
//
//       for (var i = 0; i < pt.length; i++) {
//         var markerinfo=pt[i];
//         var lat=markerinfo.location.coordinates.lat;
//         var lng=markerinfo.location.coordinates.lng;
//
//         var myLatLng = new google.maps.LatLng(lat,lng);
//         var title = markerinfo.name;
//         var address = markerinfo.location.full_address;
//         var phone = markerinfo.phone;
//         var type = markerinfo.type.slug;
//         var lugar=markerinfo.lugar;
//         var atencion=markerinfo.atencion;
//         var restricciones=markerinfo.restricciones;
//         var prioridad=markerinfo.prioridad;
//         categorie=type;
//         var image_super = {
//           url: "images/files-vales/icon-multimarket.svg",
//           size: new google.maps.Size(50, 50),
//           origin: new google.maps.Point(0, 0),
//           anchor: new google.maps.Point(50, 50),
//           scaledSize: new google.maps.Size(50, 50)
//         };
//         var image_min = {
//           url: "images/tiendas-afiliadas.svg",
//           size: new google.maps.Size(50, 50),
//           origin: new google.maps.Point(0, 0),
//           anchor: new google.maps.Point(50, 50),
//           scaledSize: new google.maps.Size(50, 50)
//         };
//         var image_tiendas = {
//           url: "images/files-vales/icon-tiendas.svg",
//           size: new google.maps.Size(50, 50),
//           origin: new google.maps.Point(0, 0),
//           anchor: new google.maps.Point(50, 50),
//           scaledSize: new google.maps.Size(50, 50)
//         };
//         var image_agentes = {
//           // url: "images/icon-agentes.png",
//           url: "images/files-vales/agente4.svg",
//           size: new google.maps.Size(50, 50),
//           origin: new google.maps.Point(0, 0),
//           anchor: new google.maps.Point(50, 50),
//           scaledSize: new google.maps.Size(50, 50)
//         };
//         var image_pavicar = {
//           url: "images/carro.svg",
//           size: new google.maps.Size(50, 50),
//           origin: new google.maps.Point(0, 0),
//           anchor: new google.maps.Point(50, 50),
//           scaledSize: new google.maps.Size(50, 50)
//         };
//         var icons = {
//               tienda: {
//                   icon: image_tiendas
//               },
//               multimarket: {
//                   icon: image_super
//               },
//               minimarkert:{
//                 icon: image_min
//               },
//               agente:{
//                 icon: image_agentes
//               },
//               pavicar:{
//                 icon: image_pavicar
//               }
//           };
//           var iconoLugar=markerinfo.type.slug;
//
//         if ( bounds.contains(myLatLng) ) {
//
//
//           var marker = new google.maps.Marker({
//               title: title,
//               position: myLatLng,
//               icon: icons[iconoLugar].icon,
//               map: map,
//               category: categorie,
//               address: address,
//               phone: phone,
//               lugar:lugar,
//               atencion:atencion,
//               restricciones:restricciones,
//               prioridad:prioridad
//           });
//
//           place_markers.push(marker);
//
//           bounds.extend(marker.position);
//
//           (function(marker, i) {
//
//             google.maps.event.addListener(marker, 'click', function() {
//               $(".title").html(marker.title);
//               $(".address").html(marker.address);
//               $(".phone").html(marker.phone);
//               $(".atencion").html(marker.atencion);
//               $(".restricciones").html(marker.restricciones);
//             });
//           })(marker, i);
//
//         }
//       };
//     });
//
//     $("#filtro_categoria").on('change', function () {
//       // console.log("categoria");
//       var countryValSel=$("#filtro_categoria").find(":selected").val();
//       $("#filtro_categoria").find(":selected").trigger('click');
//       switch (countryValSel) {
//         case 'tienda':
//           pt=tienda;
//           break;
//         case 'minimarkert':
//           pt=minimarkert;
//           break;
//         case 'multimarket':
//           pt=multimarket;
//           break;
//         case 'pavicar':
//           pt=pavicar;
//           break;
//         default:
//           pt=agente;
//           break;
//         }
//
//         markerFiltro($("#filtro_distrito").find(":selected").text());
//
//     });
//
//
//
//
//
//     $(".cerca").on('click', function(){
//       event.preventDefault();
//       var infoWindow = new google.maps.InfoWindow({map: map});
//
//     // Try HTML5 geolocation.
//     if (navigator.geolocation) {
//       navigator.geolocation.getCurrentPosition(function(position) {
//         var pos = {
//           lat: position.coords.latitude,
//           lng: position.coords.longitude
//         };
//
//         infoWindow.setPosition(pos);
//         infoWindow.setContent('Su ublicación');
//         map.setCenter(pos);
//       }, function() {
//         handleLocationError(true, infoWindow, map.getCenter());
//       });
//     } else {
//       // Browser doesn't support Geolocation
//       handleLocationError(false, infoWindow, map.getCenter());
//     }
//       function handleLocationError(browserHasGeolocation, infoWindow, pos) {
//       infoWindow.setPosition(pos);
//       infoWindow.setContent(browserHasGeolocation ?
//           'Error: The Geolocation service failed.' :
//           'Error: Your browser doesn\'t support geolocation.');
//       }
//
//     });
//
//
//
// }
//
//
// var cont;
// var place=[];
// var pri=[];
// var pri_category=[];
// function renderMap(){
//   pri.length=0;
//   var distrito=$("#filtro_distrito").find(":selected").val();
//   var distrito_name=$("#filtro_distrito").find(":selected").text();
//   var geocoder    = new google.maps.Geocoder();
//   var selLocLat   = 0;
//   var selLocLng   = 0;
//
//   geocoder.geocode({'placeId': distrito}, function(results, status) {
//       if (status === 'OK')
//       {
//           cont=0;
//           pri_category=[];
//
//           selLocLat   = results[0].geometry.location.lat();
//           selLocLng   = results[0].geometry.location.lng();
//           var pyrmont = new google.maps.LatLng(selLocLat, selLocLng);
//           map = new google.maps.Map(document.getElementById('map3'), {
//               center: pyrmont,
//               zoom: 11
//           });
//           localStorage.setItem( 'results', JSON.stringify(results) );
//           markerFiltro(distrito_name);
//       }
//       else
//       {
//           alert('Geocode was not successful for the following reason: ' + status);
//       }
//     });
// }
//
//
//
//
//
//
// function markerFiltro(distrito)
// {
//
//       for (var i = 0; i < puntos.length; i++){
//
//           // console.log(distrito,"--------",puntos[i].distrito);
//           if(distrito.toLowerCase().indexOf(puntos[i].distrito.toLowerCase()) > -1){
//             if(puntos[i].name==$("#filtro_categoria").find(":selected").text()){
//                 // console.log(distrito,"--------",puntos[i].distrito);
//                 // console.log("entro");
//               createMarker(puntos[i]);
//             }else{
//               eliminarMarker();
//             }
//           }
//       }
//
//           if(cont==0){
//             $(".info-location").css("display","none");
//             $(".info-alert").css("display","block");
//           }
// }
//
//
//
//     function createMarker(markerinfo) {
//       cont=1;
//       $(".info-location").css("display","block");
//       $(".info-alert").css("display","none");
//       establecerMarker(markerinfo);
//     }
//
//
//
// function establecerMarker(markerinfo){
//     var lat=markerinfo.location.coordinates.lat;
//     var lng=markerinfo.location.coordinates.lng;
//
//     var myLatLng = new google.maps.LatLng(lat,lng);
//     var title = markerinfo.name;
//     var address = markerinfo.location.full_address;
//     var phone = markerinfo.phone;
//     var type = markerinfo.type.slug;
//     var lugar=markerinfo.lugar;
//     var atencion=markerinfo.atencion;
//     var restricciones=markerinfo.restricciones;
//     var prioridad=markerinfo.prioridad;
//     categorie=type;
//     var image_super = {
//       url: "images/files-vales/icon-multimarket.svg",
//       size: new google.maps.Size(50, 50),
//       origin: new google.maps.Point(0, 0),
//       anchor: new google.maps.Point(50, 50),
//       scaledSize: new google.maps.Size(50, 50)
//     };
//     var image_min = {
//       url: "images/tiendas-afiliadas.svg",
//       size: new google.maps.Size(50, 50),
//       origin: new google.maps.Point(0, 0),
//       anchor: new google.maps.Point(50, 50),
//       scaledSize: new google.maps.Size(50, 50)
//     };
//     var image_tiendas = {
//       url: "images/files-vales/icon-tiendas.svg",
//       size: new google.maps.Size(50, 50),
//       origin: new google.maps.Point(0, 0),
//       anchor: new google.maps.Point(50, 50),
//       scaledSize: new google.maps.Size(50, 50)
//     };
//     var image_agentes = {
//       // url: "images/icon-agentes.png",
//       url: "images/files-vales/agente4.svg",
//       size: new google.maps.Size(50, 50),
//       origin: new google.maps.Point(0, 0),
//       anchor: new google.maps.Point(50, 50),
//       scaledSize: new google.maps.Size(50, 50)
//     };
//     var image_pavicar = {
//       url: "images/carro.svg",
//       size: new google.maps.Size(50, 50),
//       origin: new google.maps.Point(0, 0),
//       anchor: new google.maps.Point(50, 50),
//       scaledSize: new google.maps.Size(50, 50)
//     };
//     var icons = {
//           tienda: {
//               icon: image_tiendas
//           },
//           multimarket: {
//               icon: image_super
//           },
//           minimarkert:{
//             icon: image_min
//           },
//           agente:{
//             icon: image_agentes
//           },
//           pavicar:{
//             icon: image_pavicar
//           }
//       };
//       var iconoLugar=markerinfo.type.slug;
//       marker = new google.maps.Marker({
//           title: title,
//           position: myLatLng,
//           icon: icons[iconoLugar].icon,
//           map: map,
//           category: categorie,
//           address: address,
//           phone: phone,
//           lugar:lugar,
//           atencion:atencion,
//           restricciones:restricciones,
//           prioridad:prioridad
//       });
//       // console.log(marker);
//       place.push(marker);
//       pri_category.push(marker);
//       (function(marker, i) {
//
//         google.maps.event.addListener(marker, 'click', function() {
//           $(".title").html(marker.title);
//           $(".address").html(marker.address);
//           $(".phone").html(marker.phone);
//           $(".atencion").html(marker.atencion);
//           $(".restricciones").html(marker.restricciones);
//         });
//       })(marker, i);
//
//
//
//       for(var i=0;i<pri_category.length;i++){
//         pri.push(pri_category[i].prioridad);
//       }
//
//       var mx=Math.max.apply(Math,pri);
//
//       (function(marker, i) {
//         if(marker.prioridad==mx){
//           google.maps.event.trigger(marker, 'click', {
//             latLng: new google.maps.LatLng(0, 0)
//           });
//         }
//       })(marker, i);
//
//       (function(marker, i) {
//         // if(marker.prioridad==mx){
//           google.maps.event.trigger(marker, 'click', {
//             latLng: new google.maps.LatLng(0, 0)
//           });
//         // }
//       })(marker, i);
//
// }
//
//
//
//
//
//
// function eliminarMarker(){
//   var countryValSel=$("#filtro_categoria").find(":selected").text();
//   for (i = 0; i < place.length; i++) {
//       var mark = place[i];
//       if (mark.title == countryValSel) {
//         mark.setVisible(true);
//       }
//       else {
//         mark.setVisible(false);
//       }
//   }
// }
//
//
//
//
//
// google.maps.event.addDomListener(window, 'load', initMap);
