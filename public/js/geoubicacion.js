
		var geocoder;
		var marker;
		var latLng;
		var latLng2;
		var map;

		function initialize(latitud, longitud) {
			geocoder = new google.maps.Geocoder();
			latLng = new google.maps.LatLng(latitud, longitud);
			map = new google.maps.Map(document.getElementById('mapCanvas'), {
				zoom:6,
				center: latLng,
			});

			var input = document.getElementById('direccion-maps');
			//place_id
			var autocomplete = new google.maps.places.Autocomplete(input);
			autocomplete.bindTo('bounds', map);

			autocomplete.addListener('place_changed', function() {

				var place = autocomplete.getPlace();
				console.log("place",place);
				console.log("place_id",place.place_id);
				$("#place_id").val(place.place_id);
				if (!place.geometry) {
						return;
				}
				console.log("placeeee",place);
				codeAddress();
			});




			marker = new google.maps.Marker({
				position: latLng,
				title: 'Arrastra el marcador si quieres moverlo',
				map: map,
				draggable: true
			});

			google.maps.event.addListener(map, "idle", function(){
				google.maps.event.trigger(map, 'resize');
				google.maps.event.trigger(map, 'resize'); map.setCenter(marker.getPosition());
				map.setZoom( map.getZoom() );
			});

			google.maps.event.addListener(map, 'click', function(event) {
				updateMarker(event.latLng);
			});

			geocodePosition(latLng);

			// Permito los eventos drag/drop sobre el marcador
			google.maps.event.addListener(marker, 'dragstart', function() {
				updateMarkerAddress('Arrastrando...');
			});

			google.maps.event.addListener(marker, 'drag', function() {
				updateMarkerStatus('Arrastrando...');
				updateMarkerPosition(marker.getPosition());
			});

			google.maps.event.addListener(marker, 'dragend', function() {
				updateMarkerStatus('Arrastre finalizado');
				geocodePosition(marker.getPosition());
			});

		}

		//google.maps.event.addDomListener(window, 'load', initialize);

		// ESTA FUNCION OBTIENE LA DIRECCION A PARTIR DE LAS COORDENADAS POS
		function geocodePosition(pos) {
			geocoder.geocode({
				latLng: pos
			}, function(responses) {
				if (responses && responses.length > 0) {
					updateMarkerAddress(responses[0].formatted_address);
				} else {
					updateMarkerAddress('No puedo encontrar esta direccion.');
				}
			});
		}

		// OBTIENE LA DIRECCION A PARTIR DEL LAT y LON DEL FORMULARIO
		function codeLatLon() {
			str= document.form_mapa.longitud.value+" , "+document.form_mapa.latitud.value;
			latLng2 = new google.maps.LatLng(document.form_mapa.latitud.value ,document.form_mapa.longitud.value);
			marker.setPosition(latLng2);
			map.setCenter(latLng2);
			geocodePosition (latLng2);
			// document.form_mapa.direccion.value = str+" OK";
		}

		// OBTIENE LAS COORDENADAS DESDE lA DIRECCION EN LA CAJA DEL FORMULARIO
		function codeAddress() {
			var address = $('#direccion-maps').val();
			geocoder.geocode( { 'address': address}, function(results, status) {
				if (status == google.maps.GeocoderStatus.OK) {
					updateMarkerPosition(results[0].geometry.location);
					marker.setPosition(results[0].geometry.location);
					map.setCenter(results[0].geometry.location);
					geocodePosition(marker.getPosition())
				} else {
					alert('ERROR : ' + status);
				}
			});
		}

		// OBTIENE LAS COORDENADAS DESDE lA DIRECCION EN LA CAJA DEL FORMULARIO
		function codeAddress2 (address) {

			geocoder.geocode( { 'address': address}, function(results, status) {
				if (status == google.maps.GeocoderStatus.OK) {
					updateMarkerPosition(results[0].geometry.location);
					console.log("marker-->",marker);
					marker.setPosition(results[0].geometry.location);
					map.setCenter(results[0].geometry.location);
					$('#direccion-maps').val(address);
				} else {
					alert('ERROR : ' + status);
				}
			});
		}

		function updateMarkerStatus(str) {
			$('#direccion-maps').val(str);
		}

		// RECUPERO LOS DATOS LON LAT Y DIRECCION Y LOS PONGO EN EL FORMULARIO
		function updateMarkerPosition (latLng) {
			$('#longitud-maps').val(latLng.lng());
			$('#latitud-maps').val(latLng.lat());
		}

		function updateMarkerAddress(str) {
			$('#direccion-maps').val(str);
		}

		function updateMarker(location) {
			marker.setPosition(location);
			updateMarkerPosition(location);
			geocodePosition(location);
		}
