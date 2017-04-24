<?php
/**
 * Template Name: Contact
 *
 */
?>

<?php get_header(); ?>
<div id="contact">
	<div class="container">
        <div id="breadcrumb">
            <?php
            if ( function_exists('yoast_breadcrumb') ) {
                yoast_breadcrumb();
            }
            ?>
        </div>
        <h2><?php the_title(); ?></h2>
        <span class="border-title"></span>

	</div>

        <div id="map"></div>

	<div class="container">
		<div class="row">
			<div class="col-lg-6 offset-lg-3">
				<div class="row">
					<div class="avatar col-md-6">
						<?php the_post_thumbnail('', array('class' => 'img-fluid')); ?>
					</div>
					<div class="address col-md-6">
						<h3>NathaDlie D.</h3>
						<div class="sub-address">
							<?php the_field('contact'); ?>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-8 offset-lg-2 contact">
				<?php the_content(); ?>
			</div>
		</div>
	</div>

		<script>
		var map;
	    	function initMap() {

				var myLatLng = {lat: 50.5557628, lng: 3.1430986000000303};

		        var map = new google.maps.Map(document.getElementById('map'), {
		          zoom: 15,
		          center: myLatLng
		        });

				var iconBase = '/wp-content/themes/nathadlied/images/';
				var marker = new google.maps.Marker({
					position: myLatLng,
					map: map,
					icon: iconBase + 'marker.png'
				});

				var styledMapType = new google.maps.StyledMapType(
				[
					  {
					    "elementType": "geometry",
					    "stylers": [
					      {
					        "color": "#f5f5f5"
					      }
					    ]
					  },
					  {
					    "elementType": "labels.icon",
					    "stylers": [
					      {
					        "visibility": "off"
					      }
					    ]
					  },
					  {
					    "elementType": "labels.text.fill",
					    "stylers": [
					      {
					        "color": "#616161"
					      }
					    ]
					  },
					  {
					    "elementType": "labels.text.stroke",
					    "stylers": [
					      {
					        "color": "#f5f5f5"
					      }
					    ]
					  },
					  {
					    "featureType": "administrative.land_parcel",
					    "elementType": "labels.text.fill",
					    "stylers": [
					      {
					        "color": "#bdbdbd"
					      }
					    ]
					  },
					  {
					    "featureType": "poi",
					    "elementType": "geometry",
					    "stylers": [
					      {
					        "color": "#eeeeee"
					      }
					    ]
					  },
					  {
					    "featureType": "poi",
					    "elementType": "labels.text.fill",
					    "stylers": [
					      {
					        "color": "#757575"
					      }
					    ]
					  },
					  {
					    "featureType": "poi.park",
					    "elementType": "geometry",
					    "stylers": [
					      {
					        "color": "#e5e5e5"
					      }
					    ]
					  },
					  {
					    "featureType": "poi.park",
					    "elementType": "labels.text.fill",
					    "stylers": [
					      {
					        "color": "#9e9e9e"
					      }
					    ]
					  },
					  {
					    "featureType": "road",
					    "elementType": "geometry",
					    "stylers": [
					      {
					        "color": "#ffffff"
					      }
					    ]
					  },
					  {
					    "featureType": "road.arterial",
					    "elementType": "labels.text.fill",
					    "stylers": [
					      {
					        "color": "#757575"
					      }
					    ]
					  },
					  {
					    "featureType": "road.highway",
					    "elementType": "geometry",
					    "stylers": [
					      {
					        "color": "#dadada"
					      }
					    ]
					  },
					  {
					    "featureType": "road.highway",
					    "elementType": "labels.text.fill",
					    "stylers": [
					      {
					        "color": "#616161"
					      }
					    ]
					  },
					  {
					    "featureType": "road.local",
					    "elementType": "labels.text.fill",
					    "stylers": [
					      {
					        "color": "#9e9e9e"
					      }
					    ]
					  },
					  {
					    "featureType": "transit.line",
					    "elementType": "geometry",
					    "stylers": [
					      {
					        "color": "#e5e5e5"
					      }
					    ]
					  },
					  {
					    "featureType": "transit.station",
					    "elementType": "geometry",
					    "stylers": [
					      {
					        "color": "#eeeeee"
					      }
					    ]
					  },
					  {
					    "featureType": "water",
					    "elementType": "geometry",
					    "stylers": [
					      {
					        "color": "#c9c9c9"
					      }
					    ]
					  },
					  {
					    "featureType": "water",
				    "elementType": "labels.text.fill",
				    "stylers": [
				      {
				        "color": "#9e9e9e"
				      }
				    ]
				  }
			],
	        {name: 'Styled Map'});

	        //Associate the styled map with the MapTypeId and set it to display.
	        map.mapTypes.set('styled_map', styledMapType);
	        map.setMapTypeId('styled_map');

		    }

		</script>
</div>
<?php get_footer(); ?>
