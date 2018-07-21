
var puntos=[
    {
        "name": "supermercado lima",
        "location": {
            "coordinates": {
                "lat": -12.1276493,
                "lng": -77.0008835
            },
            "full_address": "Dirección completa #1"
        },
        "phone": "65 9332-6545",
        "type": {
            "name": "Supermercado",
            "slug": "supermercado"
        }
    },
    {
        "name": "Lima",
        "location": {
            "coordinates": {
                "lat": -12.1310898,
                "lng": -77.003852
            },
            "full_address": "Dirección completa #2"
        },
        "phone": "65 9332-6545",
        "type": {
            "name": "Tiendas Afiliadas",
            "slug": "tienda"
        }
    },
    {
        "name": "Lima-peru",
        "location": {
            "coordinates": {
                "lat": -12.1282681,
                "lng": -77.0002049
            },
            "full_address": "Dirección completa #3"
        },
        "phone": "65 9332-6545",
        "type": {
            "name": "Minimarkert",
            "slug": "minimarkert"
        }
    },
    {
        "name": "Supermercado Franco",
        "location": {
            "coordinates": {
                "lat": -16.3909595,
                "lng": -71.5439903
            },
            "full_address": "Emmel 115, Yanahuara"
        },
        "phone": "65 9332-6545",
        "type": {
            "name": "Supermercado",
            "slug": "supermercado"
        }
    }
]


function initMap() {
  var s = document.createElement("script");
  s.src = "js/infobox.js";
  $("head").append(s);

  var markers = [];
  var map = new google.maps.Map(document.getElementById('map2'), {
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    // draggable: false
    scrollwheel: false
  });


  var defaultBounds = new google.maps.LatLngBounds(
    new google.maps.LatLng(-12.1288637,-77.0094561),
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

  google.maps.event.addListener(map, 'bounds_changed', function() {

    var bounds = map.getBounds();
    searchBox.setBounds(bounds);
    for (var k = 0; k < place_markers.length; k++) {
      var one_marker = place_markers[k];
      if (!bounds.contains(one_marker.getPosition())) {
        one_marker.setMap(null);
      }
    }

    for (var i = 0; i < puntos.length; i++) {
      var markerinfo=puntos[i];
      // var placeLatLng = puntos[i];
      var lat=markerinfo.location.coordinates.lat;
      var lng=markerinfo.location.coordinates.lng;

      var myLatLng = new google.maps.LatLng(lat,lng);
      var title = markerinfo.name;
      var address = markerinfo.location.full_address;
      var phone = markerinfo.phone;
      var type = markerinfo.type.slug;
      categorie=type;
      var image_super = {
        url: "images/supermercado.svg",
        size: new google.maps.Size(50, 50),
        origin: new google.maps.Point(0, 0),
        anchor: new google.maps.Point(50, 50),
        scaledSize: new google.maps.Size(50, 50)
      };
      var image_min = {
        url: "images/minimarket.svg",
        size: new google.maps.Size(50, 50),
        origin: new google.maps.Point(0, 0),
        anchor: new google.maps.Point(50, 50),
        scaledSize: new google.maps.Size(50, 50)
      };
      var image_tiendas = {
        url: "images/tiendas-afiliadas.svg",
        size: new google.maps.Size(50, 50),
        origin: new google.maps.Point(0, 0),
        anchor: new google.maps.Point(50, 50),
        scaledSize: new google.maps.Size(50, 50)
      };
      var icons = {
            tienda: {
                icon: image_tiendas
            },
            supermercado: {
                icon: image_super
            },
            minimarkert:{
              icon: image_min
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
            phone: phone

        });
        place_markers.push(marker);

        bounds.extend(marker.position);

        (function(marker, i) {
          google.maps.event.addListener(marker, 'click', function() {
            var t='<div class="title-map">' + marker.title + '</div>' + '<div class="endereco">' + marker.address + '</div>' + '<div class="telefone-map">' + marker.phone + '</div>';
              var infoboxOptions = {
            		content: t,
                pixelOffset: new google.maps.Size(-115, -80),
            		alignBottom: true,
            		position: myLatLng,
            		boxClass: "gmap-info-window",
            		closeBoxMargin: "-10px -10px 0px 0px",
            		closeBoxURL: 'images/icono-cerrar.png'
            	};
              var infobox = new InfoBox(infoboxOptions);
              infobox.open(map, marker);
          });
        })(marker, i);
      }
    };
  });

$("#todos").css("opacity","1");
  $(".filtro-buscador").find('a').on('click', function(){
    $(".filtro-buscador").find('a').css("opacity","");
     $(this).css("opacity","1");
    event.preventDefault();
    var countryValSel=$(this).find('span').attr('class');


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

  // google.maps.event.addListener(map, 'dragend', function() { alert('map dragged'); } );
  // google.maps.event.addListener(map, 'dragend', function() { alert('map dragged'); } );
