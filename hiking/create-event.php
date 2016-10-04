<?php

include '../includes/config.inc.php';
include '../fcts/mail.fct.php';
include '../fcts/hiking.fct.php';
include 'session.php';

$title = "French Riviera Hiking Meetup - Create an hiking event";
$activeMenu = "create-event";

if(isAuthenticated()) {
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  	<?php
	include 'head.php';
	?>
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	    <link rel="stylesheet" href="css/styles.css">
	    
	    <!-- Dependencies: JQuery and GMaps API should be loaded first -->
		<script src="https://code.jquery.com/jquery-2.2.1.min.js"></script>
		<script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
	    
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	
		<!-- CSS and JS for our code -->
		<link rel="stylesheet" type="text/css" href="css/jquery-gmaps-latlon-picker.css"/>
		<script src="js/jquery-gmaps-latlon-picker.js"></script>
	    
	    <script type="text/javascript" src="node_modules/moment/min/moment.min.js"></script>
	    
	    <link rel="stylesheet" href="node_modules/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" />
	    <script type="text/javascript" src="node_modules/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>

	
	    <!-- 1. Load libraries -->
	     <!-- Polyfill(s) for older browsers -->
	    <script src="node_modules/core-js/client/shim.min.js"></script>
	    <script src="node_modules/zone.js/dist/zone.js"></script>
	    <script src="node_modules/reflect-metadata/Reflect.js"></script>
	    <script src="node_modules/systemjs/dist/system.src.js"></script>
	    <!-- 2. Configure SystemJS -->
	    <script src="systemjs.config.js"></script>
	    <script>
	      System.import('app/main').catch(function(err){ console.error(err); });
	    </script>
  </head>
  <body>
  	<?php
	include 'menu.php';
	?>
	
	<div class="container" role="main">
		<hiking-form>Loading...</hiking-form>
	</div>
  </body>
</html>
<?php
}
?>