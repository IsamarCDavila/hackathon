function initMap() {
  var s = document.createElement("script");
  s.src = "js/infobox.js";
  $("head").append(s);

  var markers = [];
  var map = new google.maps.Map(document.getElementById('map3'), {
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    // draggable: false
    scrollwheel: false
  });

  var defaultBounds = new google.maps.LatLngBounds(
    new google.maps.LatLng(-12.0266034,-77.1278654),
    new google.maps.LatLng(-12.1285100,-76.9980422)
  );
  map.fitBounds(defaultBounds);


  var input =(document.getElementById('pac-input'));

  var searchBox = new google.maps.places.SearchBox((input));

  google.maps.event.addListener(searchBox, 'places_changed', function() {
    var places = searchBox.getPlaces();

    for (var i = 0, marker; marker = markers[i]; i++) {
      marker.setMap(null);
    }


    markers = [];
    var bounds = new google.maps.LatLngBounds();

    for (var i = 0, place; place = places[i]; i++) {
      var image = {
        url: place.icon,
        size: new google.maps.Size(71, 71),
        origin: new google.maps.Point(0, 0),
        anchor: new google.maps.Point(17, 34),
        scaledSize: new google.maps.Size(25, 25)
      };

      var marker = new google.maps.Marker({
        map: map,
        icon: image,
        title: place.name,
        position: place.geometry.location
      });

      markers.push(marker);

      bounds.extend(place.geometry.location);

      if (place.geometry.viewport) {
        map.fitBounds(place.geometry.viewport);
      } else {
        map.setCenter(place.geometry.location);
        map.setZoom(5);
      }
    }

  });


  var place_markers = [];
  google.maps.event.addListener(map, 'dragend', function() {
     var countryValSel=$(".filtro-buscador .filtroInterior").find('span').attr("class");
    for (i = 0; i < place_markers.length; i++) {
        var mark = place_markers[i];
        if (mark.category == countryValSel || countryValSel.length === 0) {
          console.log("hola");
          mark.setVisible(true);
        }
        else {
          mark.setVisible(false);
        }
    }
  });


  google.maps.event.addListener(map, 'zoom_changed', function() {
    var countryValSel=$(".filtro-buscador .filtroInterior").find('span').attr("class");
  });

var pt=puntos;

  google.maps.event.addListener(map, 'bounds_changed', function() {
    var bounds = map.getBounds();
    searchBox.setBounds(bounds);
    console.log(place_markers);
    for (var k = 0; k < place_markers.length; k++) {
      var one_marker = place_markers[k];
      if (!bounds.contains(one_marker.getPosition())) {
        one_marker.setMap(null);
      }
    }

    for (var i = 0; i < pt.length; i++) {
      var markerinfo=pt[i];
      // var placeLatLng = puntos[i];
      var lat=markerinfo.location.coordinates.lat;
      var lng=markerinfo.location.coordinates.lng;

      var myLatLng = new google.maps.LatLng(lat,lng);
      var title = markerinfo.name;
      var address = markerinfo.location.full_address;
      var phone = markerinfo.phone;
      var type = markerinfo.type.slug;
      var lugar=markerinfo.lugar;
      var atencion=markerinfo.atencion;
      var restricciones=markerinfo.restricciones;
      categorie=type;
      var image_super = {
        url: "images/files-vales/icon-multimarket.svg",
        size: new google.maps.Size(50, 50),
        origin: new google.maps.Point(0, 0),
        anchor: new google.maps.Point(50, 50),
        scaledSize: new google.maps.Size(50, 50)
      };
      var image_min = {
        url: "images/tiendas-afiliadas.svg",
        size: new google.maps.Size(50, 50),
        origin: new google.maps.Point(0, 0),
        anchor: new google.maps.Point(50, 50),
        scaledSize: new google.maps.Size(50, 50)
      };
      var image_tiendas = {
        url: "images/files-vales/icon-tiendas.svg",
        size: new google.maps.Size(50, 50),
        origin: new google.maps.Point(0, 0),
        anchor: new google.maps.Point(50, 50),
        scaledSize: new google.maps.Size(50, 50)
      };
      var image_agentes = {
        url: "images/icon-agentes.png",
        size: new google.maps.Size(50, 50),
        origin: new google.maps.Point(0, 0),
        anchor: new google.maps.Point(50, 50),
        scaledSize: new google.maps.Size(50, 50)
      };
      var icons = {
            tienda: {
                icon: image_tiendas
            },
            multimarket: {
                icon: image_super
            },
            minimarkert:{
              icon: image_min
            },
            agente:{
              icon: image_agentes
            }
        };
        var iconoLugar=markerinfo.type.slug;

      if ( bounds.contains(myLatLng) ) {


        var marker = new google.maps.Marker({
            title: title,
            position: myLatLng,
            icon: icons[iconoLugar].icon,
            // animation: google.maps.Animation.DROP,
            map: map,
            category: categorie,
            address: address,
            phone: phone,
            lugar:lugar,
            atencion:atencion,
            restricciones:restricciones
        });

        place_markers.push(marker);

        bounds.extend(marker.position);

        (function(marker, i) {

          google.maps.event.addListener(marker, 'click', function() {
            $(".title").html(marker.title);
            $(".address").html(marker.address);
            $(".phone").html(marker.phone);
            $(".atencion").html(marker.atencion);
            $(".restricciones").html(marker.restricciones);
          });
        })(marker, i);

      }
    };
  });


$("#todos").css("opacity","1");
  $(".filtro-buscador").find('a').on('click', function(){
    $(".filtro-buscador").find('a').css("opacity","");
     $(this).css("opacity","1");
     $(".filtro-buscador a").removeClass("filtroInterior");
     $(this).addClass("filtroInterior");
    event.preventDefault();
    var countryValSel=$(this).find('span').attr('class');
    console.log(countryValSel);
    switch (countryValSel) {
      case 'tienda':
        pt=tienda;
        break;
      case 'minimarkert':
        pt=minimarkert;
        break;
      case 'multimarket':
        pt=multimarket;
        break;
      default:
        pt=agente;
        break;
      }




    for (i = 0; i < place_markers.length; i++) {
        var mark = place_markers[i];

        if (mark.category == countryValSel || countryValSel.length === 0) {
          mark.setVisible(true);
        }
        else {
          mark.setVisible(false);
        }
    }
  });

  $(".list-ubicacion li").find('a').on('click', function(){
    $(".list-ubicacion a").removeClass("filtroExterior");
    $(this).addClass("filtroExterior");
    event.preventDefault();
    var category=$(this).html();
    if(category=="Provincias"){
      var defaultBounds = new google.maps.LatLngBounds(
        // new google.maps.LatLng(-9.1305904,-78.4376801),
        new google.maps.LatLng(-2.0497303,-77.7675141),
        new google.maps.LatLng(-17.9984335,-73.9003200)
      );
      map.fitBounds(defaultBounds);
    }else{
      var defaultBounds = new google.maps.LatLngBounds(
        new google.maps.LatLng(-12.0266034,-77.1278654),
        new google.maps.LatLng(-12.1285100,-76.9980422)
      );
      map.fitBounds(defaultBounds);
    }


    for (i = 0; i < place_markers.length; i++) {
        var marker = place_markers[i];
        if (marker.lugar == category || category.length === 0) {
            marker.setVisible(true);
        }
        else {
            marker.setVisible(false);
        }
    }

  });




  $(".cerca").on('click', function(){
    event.preventDefault();
    var infoWindow = new google.maps.InfoWindow({map: map});

  // Try HTML5 geolocation.
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
      var pos = {
        lat: position.coords.latitude,
        lng: position.coords.longitude
      };

      infoWindow.setPosition(pos);
      infoWindow.setContent('Su ublicación');
      map.setCenter(pos);
    }, function() {
      handleLocationError(true, infoWindow, map.getCenter());
    });
  } else {
    // Browser doesn't support Geolocation
    handleLocationError(false, infoWindow, map.getCenter());
  }
    function handleLocationError(browserHasGeolocation, infoWindow, pos) {
    infoWindow.setPosition(pos);
    infoWindow.setContent(browserHasGeolocation ?
        'Error: The Geolocation service failed.' :
        'Error: Your browser doesn\'t support geolocation.');
    }

  });

}




google.maps.event.addDomListener(window, 'load', initMap);
