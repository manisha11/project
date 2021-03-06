<!DOCTYPE html>
<html>
<body>
<head>
    <title>Simple Map</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <style>
      html, body, #map-canvas {
        margin: 0;
        padding: 0;
        height: 100%;
      }
    </style>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyBABGScJQIfCPdEHscp_YPmr79uAtdYU-k&sensor=false&region=IN"></script>
    <script>
var map;
function initialize() {
  var mapOptions = {
    zoom: 5,
    center: new google.maps.LatLng(27, 75),
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };
  map = new google.maps.Map(document.getElementById('map-canvas'),
      mapOptions);
}
function get_marker(lat,lon) {
var myLatlng = new google.maps.LatLng(lat,lon);
 var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      title: 'Hello World!'
  });
var infowindow = new google.maps.InfoWindow({
      content: 'My lat is ' + lat + 'My lon is ' + lon
  });
google.maps.event.addListener(marker, 'click', function() {
    infowindow.open(map,marker);
  });
}

function codeAddress(address) {
  var geocoder;
   geocoder = new google.maps.Geocoder();
  geocoder.geocode( { 'address': address}, function(results, status) {
    if (status == google.maps.GeocoderStatus.OK) {
      map.setCenter(results[0].geometry.location);
      var marker = new google.maps.Marker({
          map: map,
          position: results[0].geometry.location,
          title: address
      });
      var infowindow = new google.maps.InfoWindow({
      content: address
  });
google.maps.event.addListener(marker, 'click', function() {
    infowindow.open(map,marker);
  });
    } else {
      alert('Geocode was not successful for the following reason: ' + status);
    }
  });
}

google.maps.event.addDomListener(window, 'load', initialize);
codeAddress('RAJASTHAN');
    </script>
  </head>
  <body>

<?php
$item=$_POST ["data"];
$search_term_esc = AddSlashes($item);

mysql_connect("localhost","root","jyoti9185");
@mysql_select_db("project") or die("unable to select database");

$sql=mysql_query("SELECT DISTINCT State FROM finaldata1 LIMIT 0,15");

echo "<table border='1' bgcolor='Green'>";
echo "<th>STATE</th>";
echo "<th>Districts</th>";


while($row=mysql_fetch_array($sql))
{
  
echo "<tr>";
        echo "<td>" . $row['State'] . "</td>";
        echo "<td>" . $row['Districts'] . "</td>";
  echo "</tr>";
echo "</table>";
?>

        <script>
		codeAddress('<?php echo $row["State"]; ?>');
	</script>
    <?php

	}
    ?>

	<div id="map-canvas"></div> 

  </body>
</html>
}








    
