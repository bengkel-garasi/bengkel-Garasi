<!-- Slider Section -->
	<div id="slider-section" class="slider-section container-fluid no-padding">
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img src="<?php echo base_url(); ?>assets/images/s1.jpg" alt="slide1" width="1920" height="770"/>
					<div class="carousel-caption">
						<div class="container">
							<div class="col-md-5 col-sm-6 col-xs-9 pull-right">
								<div class="slider-content-box">
									<div class="col-md-12 col-sm-12 col-xs-6 no-padding">
										<h3 class="slider-title">Promo diskon 30% pada setiap pelayanan bengkel</h3>
										<span>January 03-07</span>
										<p>Ngawi,Jawa Timur,Indonesia </p>
									</div>
									<div class="slider-author col-md-12 col-sm-12 col-xs-6 no-padding">
										<img src="<?php echo base_url(); ?>assets/images/slider-thumb1.jpg" alt="slider-thumb" width="74" height="74"/>
										<h3>Daniel Lesner<span>Public Speaker</span></h3>
									</div>
									<div class="col-md-12 col-sm-12 col-xs-6 no-padding">
										<a href="#" title="Register now">Read More</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="item">
					<img src="<?php echo base_url(); ?>assets/images/s2.jpg" alt="slide2" width="1920" height="770"/>
					<div class="carousel-caption">
						<div class="container">
							<div class="col-md-5 col-sm-6 col-xs-9 pull-right">
								<div class="slider-content-box">
									<div class="col-md-12 col-sm-12 col-xs-6 no-padding">
										<h3 class="slider-title">International Academic Business Conference Orlando</h3>
										<span>January 15-19</span>
										<p>09, Design Street, New York, NY- 10001, United States</p>
									</div>
									<div class="slider-author col-md-12 col-sm-12 col-xs-6 no-padding">
										<img src="<?php echo base_url(); ?>assets/images/slider-thumb2.jpg" alt="slider-thumb" width="74" height="74"/>
										<h3>Dwayne Johnson<span>Business Speaker</span></h3>
									</div>
									<div class="col-md-12 col-sm-12 col-xs-6 no-padding">
										<a href="#" title="Register now">Read More</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="item">
					<img src="<?php echo base_url(); ?>assets/images/s3.jpg" alt="slide3" width="1920" height="770"/>
					<div class="carousel-caption">
						<div class="container">
							<div class="col-md-5 col-sm-6 col-xs-9 pull-right">
								<div class="slider-content-box">
									<div class="col-md-12 col-sm-12 col-xs-6 no-padding">
										<h3 class="slider-title">Well the first thing you know ol' Jeds a millionaire</h3>
										<span>January 27-30</span>
										<p>09, Design Street, New York, NY- 10001, United States </p>
									</div>
									<div class="slider-author col-md-12 col-sm-12 col-xs-6 no-padding">
										<img src="<?php echo base_url(); ?>assets/images/slider-thumb3.jpg" alt="slider-thumb" width="74" height="74"/>
										<h3>David Warner<span>Public Speaker</span></h3>
									</div>
									<div class="col-md-12 col-sm-12 col-xs-6 no-padding">
										<a href="#" title="Register now">Read More</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Controls -->
			<div class="container">
				<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
					<i class="fa fa-angle-left"></i>
				</a>
				<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
					<i class="fa fa-angle-right"></i>
				</a>
			</div>
		</div>
	</div><!-- Slider Section /- -->
	<br>
	<div class="container-fluid no-padding">
	<style>
.coordinates {
background: rgba(0,0,0,0.5);
color: #fff;
position: absolute;
bottom: 40px;
left: 10px;
padding:5px 10px;
margin: 0;
font-size: 11px;
line-height: 18px;
border-radius: 3px;
display: none;
}</style>
            <div id="map" style="width:100%;height:600px;"></div>
       <pre id='coordinates' class='coordinates'></pre>
<script>
mapboxgl.accessToken = 'pk.eyJ1IjoiajNmZnIxIiwiYSI6ImNrMDk4bThqbDA1c3AzY3BleGprNnoxankifQ.pvzs9-KJLCp13kOZGcD9Xw';
 var coordinates = document.getElementById('coordinates');
var map = new mapboxgl.Map({
container: 'map',
style: 'mapbox://styles/mapbox/streets-v11',
center: [0, 0],
zoom: 2 // starting zoom
});
var marker = new mapboxgl.Marker({
draggable: true 
})
.setLngLat([0, 0])
.addTo(map);
 
function onDragEnd() {
var lngLat = marker.getLngLat();
coordinates.style.display = 'block';
coordinates.innerHTML = 'Longitude: ' + lngLat.lng + '<br />Latitude: ' + lngLat.lat;
}
marker.on('dragend', onDragEnd);

var coordinatesGeocoder = function (query) {
// match anything which looks like a decimal degrees coordinate pair
var matches = query.match(/^[ ]*(?:Lat: )?(-?\d+\.?\d*)[, ]+(?:Lng: )?(-?\d+\.?\d*)[ ]*$/i);
if (!matches) {
return null;
}
 
function coordinateFeature(lng, lat) {
return {
center: [lng, lat],
geometry: {
type: "Point",
coordinates: [lng, lat]
},
place_name: 'Lat: ' + lat + ' Lng: ' + lng,
place_type: ['coordinate'],
properties: {},
type: 'Feature'
};
}
 
var coord1 = Number(matches[1]);
var coord2 = Number(matches[2]);
var geocodes = [];
 
if (coord1 < -90 || coord1 > 90) {
// must be lng, lat
geocodes.push(coordinateFeature(coord1, coord2));
}
 
if (coord2 < -90 || coord2 > 90) {
// must be lat, lng
geocodes.push(coordinateFeature(coord2, coord1));
}
 
if (geocodes.length === 0) {
// else could be either lng, lat or lat, lng
geocodes.push(coordinateFeature(coord1, coord2));
geocodes.push(coordinateFeature(coord2, coord1));
}
 
return geocodes;
};
 
map.addControl(new MapboxGeocoder({
accessToken: mapboxgl.accessToken,
localGeocoder: coordinatesGeocoder,
zoom: 4,
placeholder: " Try: -40, 170",
mapboxgl: mapboxgl
}));
 map.addControl(new mapboxgl.GeolocateControl({
positionOptions: {
enableHighAccuracy: true
},
trackUserLocation: true
}));
 map.addControl(new mapboxgl.NavigationControl());
</script></div>

