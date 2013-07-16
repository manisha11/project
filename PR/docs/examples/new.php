<!DOCTYPE html>
<html>

<body background ="background.jpg">
<style type "text/css">
body
{
color:white;
}
img 
{
    position: absolute;
    top: 50; bottom:100; left: 50; right:0;
    margin: auto;

}
</style>


<img src="butterfly.gif" width="200" height="200" alt="" />
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

    </script>
  </head>
  <body>

<?php
$item=$_POST ["data"];
$search_term_esc = AddSlashes($item);

mysql_connect("localhost","root","jyoti9185");
@mysql_select_db("project") or die("unable to select database");

//$sql=mysql_query("SELECT DISTINCT State FROM finaldata1 LIMIT 0,15");
$sql=mysql_query("SELECT * FROM finaldata1 WHERE `District` LIKE '%$item%'");

echo "$sql";

while($row=mysql_fetch_array($sql))
{ 
  echo "SERVICES  OFFERED  BY:$item"." "."District CSCs are :-"."<br> <br> <br>";

  if($row['Birth & Death Certificate']=="Yes")
  {
  echo "Birth & Death Certificate"."<br>";
  }
  if($row['Income Certificate']=="Yes")
  {
  echo "Income Certificate"."<br>";
  }
  if($row['PRC or Domicile Certificate']=="Yes")
  {
  echo " PRC or Domicile Certificate"."<br>";
  }
  if($row['Caste Certificate']=="Yes")
  {
  echo "Caste Certificate"."<br>";
  }
  if($row['Certified Copy of Electoral Roll, etc. certificates']=="Yes")
  {
  echo "Certified Copy of Electoral Roll, etc. certificates"."<br>";
  }
  if($row['Government Forms Submission']=="Yes")
  {
  echo "Government Forms Submission"."<br>";
  }
  if($row['Saakshar Bharat Data Entry Work']=="Yes")
  {
  echo "Saakshar Bharat Data Entry Work"."<br>";
  }
  if($row['IAY Data Entry & Photography']=="Yes")
  {
  echo "IAY Data Entry & Photography"."<br>";
  }
  if($row['NRHM Data Entry & MIS Posting']=="Yes")
  {
  echo "NRHM Data Entry & MIS Posting"."<br>";
  }
  if($row['Commercial Tax Services']=="Yes")
  {
  echo "Commercial Tax Services"."<br>";
  }
  if($row['Revision of Electoral Roll & Generation of EPIC']=="Yes")
  {
  echo "Revision of Electoral Roll & Generation of EPIC"."<br>";
  }
  if($row[' Preparation of MGNREGA Job Card']=="Yes")
  {
  echo " Preparation of MGNREGA Job Card"."<br>";
  }
  if($row['MGNREGA Data Entry Work']=="Yes")
  {
  echo " MGNREGA Data Entry Work"."<br>";
  }
  if($row['Election & Vote Counting Webcasting']=="Yes")
  {
  echo " Election & Vote Counting Webcasting"."<br>";
  }
  if($row['Training to Elected PRI Representatives']=="Yes")
  {
  echo "Training to Elected PRI Representatives"."<br>";
  }
  if($row['Business Correspondent']=="Yes")
  {
  echo "Business Correspondent"."<br>";
  }
  if($row['Life & Non-Life Insurance premium collection']=="Yes")
  {
  echo " Life & Non-Life Insurance premium collection"."<br>";
  }
  if($row['PFRDA Pension Services']=="Yes")
  {
  echo "PFRDA Pension Services"."<br>";
  }
  if($row['Mobile Top-Ups']=="Yes")
  {
  echo " Mobile Top-Ups"."<br>";
  }
   if($row['DTH Recharge and Booking']=="Yes")
  {
  echo "DTH Recharge and Booking"."<br>";
  }
  if($row['Railway Reservations']=="Yes")
  {
  echo "Railway Reservations"."<br>";
  }
  if($row['Affinity Marketing']=="Yes")
  {
  echo "Affinity Marketing"."<br>";
  }
  if($row['Retail Sales']=="Yes")
  {
  echo " Retail Sales"."<br>";
  }
  if($row['Power Bill Payment']=="Yes")
  {
  echo "Power Bill Payment "."<br>";
  }
  if($row['BSNL Bill Payment']=="Yes")
  {
  echo " BSNL Bill Payment"."<br>";
  }
  if($row['e-commerce']=="Yes")
  {
  echo "e-Commerce"."<br>";
  }
  if($row['Agricultural Diagnostics']=="Yes")
  {
  echo "Agricultural Diagnostics"."<br>";
  }
  if($row['IEC(Information,Education and Communication)']=="Yes")
  {
  echo " IEC (Information, Education and Communication)"."<br>";
  }
  if($row['On-call Consultation Services']=="Yes")
  {
  echo "On-call Consultation Services"."<br>";
  }

}

while($row=mysql_fetch_array($sql))
{
  
?>

        <script>
		codeAddress('<?php echo $item; ?>');
	</script>
    <?php

	}
    ?>

	<div id="map-canvas"></div> 

  </body>
</html>
}








    
