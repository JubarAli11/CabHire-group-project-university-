
<HTML XMLns="http://www.w3.org/1999/xHTML">
<!--
	
	Functonality : This page is provided to customers and admin to login into the CabsOnlie application.
			 This page will take the email address and password from the user and varifies against the values stored in the database.
			 If the values match, Page is redirected to the Booking page for customers and admin page for Admin
			else, an error message is displayed.
--> 
  <head> 
    <title>Login Page</title> 
	<link rel="stylesheet" type="text/css" href="Cabsonline_Style.css">
  </head> 
  <body>
  <H1>Private Car Hires</H1>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon" />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

    <title>Blueline Taxis - Newcastle Private Hire and Executive Cars</title>



    <link rel="stylesheet" type="text/css" href="Cabsonline_Style.css">
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false&libraries=places"></script>
    <script type="text/javascript">
        //<![CDATA[
        var map = null;
        var directionDisplay;
        var directionsService = new google.maps.DirectionsService();

        function initialize() {
            directionsDisplay = new google.maps.DirectionsRenderer();

            var London = new google.maps.LatLng(54.9819366,-1.5378029);

            var mapOptions = {
                center              : London,
                zoom                : 6,
                minZoom             : 3,
                streetViewControl   : false,
                mapTypeId           : google.maps.MapTypeId.ROADMAP,
                zoomControlOptions  : {style:google.maps.ZoomControlStyle.MEDIUM}
            };


            map = new google.maps.Map(document.getElementById('map_canvas'),
                mapOptions);

            //Find From location
            var fromText = document.getElementById('start');
            var fromAuto = new google.maps.places.Autocomplete(fromText);
            fromAuto.bindTo('bounds', map);
            //Find To location
            var toText = document.getElementById('end');
            var toAuto = new google.maps.places.Autocomplete(toText);
            toAuto.bindTo('bounds', map);
            //
            directionsDisplay.setMap(map);
            directionsDisplay.setPanel(document.getElementById('directions-panel'));

            /*var control = document.getElementById('control');
            control.style.display = 'block';
            map.controls[google.maps.ControlPosition.TOP].push(control);*/
        }

        function auto() {
            var input = document.getElementById[('start'), ('end')];
            var types
            var options = {
                types: [],
                componentRestrictions: {country: ["AUS"]}
            };
            var autocomplete = new google.maps.places.Autocomplete(input, options);
        }

        google.maps.event.addDomListener(window, 'load', initialize);
    </script>