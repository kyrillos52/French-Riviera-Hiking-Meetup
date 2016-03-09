<?php

include '../includes/config.inc.php';
include '../fcts/mail.fct.php';
include '../fcts/hiking.fct.php';
include 'session.php';

$title = "French Riviera Hiking Meetup - Create an hiking event";
$activeMenu = "create-event";

$_POST_PROTECT = $_POST;

//Si tous les champs sont remplis
if (isset($_POST_PROTECT['nom']) && isset($_POST_PROTECT['email']) && isset($_POST_PROTECT['meetupUserName'])AND isset($_SESSION['hikingContent']))
{
	if ($_POST_PROTECT['nom'] != NULL AND $_POST_PROTECT['email'] != NULL  AND $_POST_PROTECT['meetupUserName'] != NULL AND $_SESSION['hikingContent'] != NULL)
	{
		$test_envoi = envoyermail(utf8_decode($_POST_PROTECT['nom']), $_POST_PROTECT['email'], 'facebook@cyril-grandjean.fr', nl2br(utf8_decode("Hiking request ".$_POST_PROTECT['meetupUserName'])), $_SESSION['hikingContent']);
	}
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  	<?php
	include 'head.php';
	?>
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	    <link rel="stylesheet" href="styles.css">
	    
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
	    <!-- IE required polyfills, in this exact order -->
	    <script src="ie-fix.js"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/es6-shim/0.33.3/es6-shim.min.js"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/systemjs/0.19.16/system-polyfills.js"></script>
	
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/2.0.0-beta.6/angular2-polyfills.min.js"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/systemjs/0.19.22/system.js"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/2.0.0-beta.6/Rx.min.js"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/2.0.0-beta.6/http.min.js"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/2.0.0-beta.6/angular2.js"></script>
	
	    <!-- 2. Configure SystemJS -->
	    <script>
	      System.config({
	        packages: {        
	          app: {
	            format: 'register',
	            defaultExtension: 'js'
	          }
	        }
	      });
	      System.import('app/main')
	            .then(null, console.error.bind(console));
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