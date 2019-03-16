$(document).ready(function() {
	//var map = L.map('map').setView([53.528883, 49.295955], 14);
	map = new L.Map('map', {center: new L.LatLng(53.528883, 49.295955), zoom: 12, zoomAnimation: false });
	var osm = new L.TileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {maptype: 'osm'});
	var yndx = new L.Yandex();
	yndx.options['maptype'] = 'yandex';
	map.addLayer(osm);
	// управление слоями карт
	map.addControl(new L.Control.Layers({'OSM':osm, 'Yandex':yndx}));
	map.zoomControl.setPosition('topright');
	
	map.on('click', modalMsgShow);
	var popup = L.popup();
	getPosters();
});

var map2;
var options = {
  'backdrop' : 'true'
}


function modalMsgShow(e)
{	
	$('#basicModal').modal('show');
	getFormPosters(e);
}
function modalClose()
{
	$('#basicModal').modal('hide');		
}

function getPosters()
{
	$.ajax({
	  type: 'GET',
	  url: '/posters',
	  headers: {
        'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
  		},
	  success: function(data){
	  	console.log(data);
	  	var markers = new L.MarkerClusterGroup();
	    $.each(data,function(i, e) {		  
		  var marker = new L.Marker(new L.LatLng(e.lat, e.lon));
		  markers.addLayer(marker);
		  createBlockPosterContext(e);
		});
		map.addLayer(markers);
	  },
	  error: function(XMLHttpRequest, textStatus, errorThrown) { 
        console.log(XMLHttpRequest.responseText); 
		} 
	});
}

function createBlockPosterContext(data) 
{
	$('<div>', {
		class: 'ctx-post',
        append: $('<img/>', 
                  {
                  	class: 'ctx-img',
                    src: '/upload/'+(data['images'].length>0 ? data['images'][0]['img']:'b11d597fc2df00c9551e484cc64f4748.png')
                  })
                .add($('<span>', {
                	text: data['message'],
                	class: 'ctx-message',
                }))
    })
    .appendTo('#sidebar-container');
}

function getFormPosters(e)
{
	$.ajax({
	  type: 'GET',
	  url: '/posters/add',
	  headers: {
        'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
  		},
	  success: function(data){
	   $('#basicModal div.modal-body').html(data);
	   loadFormPosters(e);
	  },
	  error: function(XMLHttpRequest, textStatus, errorThrown) { 
        console.log(XMLHttpRequest.responseText); 
		} 
	});
}

function loadFormPosters(e)
{
	var lat = e.latlng.lat;
	var lng = e.latlng.lng;
	
	$('#postersLat').val(lat);
	$('#postersLon').val(lng);
	$('#mapMini').html('<div class="modal-map" id="mapMini2"></div>');
	setTimeout(function () {
		map2 = new L.Map('mapMini2', {zoom: 17, zoomAnimation: false });
		var osm = new L.TileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {maptype: 'osm'});
		map2.addLayer(osm);
		
		map2.panTo(new L.LatLng(lat, lng));
		var marker = new L.Marker(new L.LatLng(lat, lng), {draggable: true});
		map2.addLayer(marker);
		marker.on("dragend", function(e){
		lat = e.target._latlng.lat;
		lng = e.target._latlng.lng;
		$('#postersLat').val(lat);
		$('#postersLon').val(lng);
	});
		  
		  
	}, 300);
}