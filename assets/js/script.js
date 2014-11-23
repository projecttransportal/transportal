    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });

	var lat            = 14.62439;
	var lon            = 120.97870999999998;
	var zoom           = 12;

	var fromProjection = new OpenLayers.Projection("EPSG:4326");   // Transform from WGS 1984
	var toProjection   = new OpenLayers.Projection("EPSG:900913"); // to Spherical Mercator Projection
	var position       = new OpenLayers.LonLat(lon, lat).transform( fromProjection, toProjection);
 
	map = new OpenLayers.Map("openmap");
	var mapnik         = new OpenLayers.Layer.OSM();
	map.addLayer(mapnik);
 
	map.setCenter(position, zoom);

    markers = new OpenLayers.Layer.Markers( "Markers" );
    markers.id = "Markers";
    map.addLayer(markers);

    map.events.register("click", map, function(e) {
    confirmAction();
          //var position = this.events.getMousePosition(e);
          var position = map.getLonLatFromPixel(e.xy);
          console.log(position);
          var size = new OpenLayers.Size(21,25);
       var offset = new OpenLayers.Pixel(-(size.w/2), -size.h);
       var icon = new OpenLayers.Icon(base_url+'assets/img/marker.png', size, offset);   
       var markerslayer = map.getLayer('Markers');

       markerslayer.addMarker(new OpenLayers.Marker(position,icon));

            

       });

    function confirmAction(){
      var confirmed = confirm("Confirm Location?");
		if (confirmed != true) {
			map.addPopup(popup);
		} 
    
    }