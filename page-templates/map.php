<div id="map">
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script><div style="overflow:hidden;height:300px;width:100%;"><div id="gmap_canvas" style="height:300px;width:100%;"</style></div></div>
	<script type="text/javascript"> 
	    function init_map() {
	        var myOptions = {
	            zoom: 10,
	            streetViewControl: false,
	            scrollwheel: false,
	            mapTypeControl: false,
	            draggable: false,
	            center: new google.maps.LatLng(59.3951579, 18.287129100000016),
	            mapTypeId: google.maps.MapTypeId.ROADMAP
	        };
	        map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);
	        marker = new google.maps.Marker({
	            map: map,
	            position: new google.maps.LatLng(59.3951579, 18.287129100000016)
	        });
	        infowindow = new google.maps.InfoWindow({
	            content: "<b>Bogesunds slottsvandrarhem</b><br/>Per Brahes v&auml;g 1 <br/>185 93 Vaxholm"
	        });
	        google.maps.event.addListener(marker, "click", function() {
	            infowindow.open(map, marker);
	        });
	        //infowindow.open(map, marker);
	    }
	    google.maps.event.addDomListener(window, 'load', init_map);
	</script>
</div>
<p>
	<a href="https://www.google.se/maps/place/Bogesunds+slottsvandrarhem+%26+konferens/@59.3950853,18.2880347,15z/data=!4m2!3m1!1s0x0000000000000000:0x04ff980e36a484d5" title="Visa på Google Maps">Visa på Google Maps</a>
</p>