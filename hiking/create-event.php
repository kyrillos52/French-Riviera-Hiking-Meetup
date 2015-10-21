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
  </head>
  <body role="document" ng-app="app" ng-controller="CreationEventController">
  	<?php
	include 'menu.php';
	?>
	
	<div class="container" role="main">
		<?php 
 		if(isset($test_envoi))
 		{
 			if($test_envoi == TRUE)
 			{
 				?>
 				<h2 style="color:red; text-align:center;">Your message was correctly sent</h2>
 				<?php
 			}
 			else 
 			{
 				?>
 				<h2 style="color:red; text-align:center;">Error during the sending of the message</h2>
 				<?php
 			}
 				
 		}
 		
 		if(!isset($test_envoi))
 		{
 		?>
 			<?php echo $_SESSION['name']; ?>
 		
	 		<form action="hiking.php" method="post" id="hiking" name="eventForm" novalidate>
	 			<div class="form-group" ng-class="{ 'has-error': eventForm.organiserName.$invalid }" >
			        <label class="control-label">Event organiser name * :</label>
			        <input type="text" class="form-control" name="organiserName" ng-model="user.organiserName" required placeholder="Organiser name" value="<?php echo $_SESSION['name']; ?>" />
			    </div>
			    
			    <div class="form-group" ng-class="{ 'has-error': eventForm.organiserPhone.$invalid }" >
			        <label class="control-label">Event organiser phone number * :</label>
			        <input type="text" class="form-control" name="organiserPhone" ng-model="user.organiserPhone" required placeholder="Organiser Phone" />
			    </div>
			    
			    <div class="form-group" ng-class="{ 'has-error': eventForm.hikingName.$invalid }" >
			        <label class="control-label">Hiking Name (eg. Mines de l'Eguisse) * :</label>
			        <input type="text" class="form-control" name="hikingName" ng-model="user.hikingName" required placeholder="Hiking name" />
			    </div>
			    
			    <div class="form-group" ng-class="{ 'has-error': eventForm.hikingDuration.$invalid }" >
			        <label class="control-label">Hiking duration without stops (eg. 4 hours) * : </label>
			        <input type="text" class="form-control" name="hikingDuration" ng-model="user.hikingDuration" required placeholder="Hiking duration" />
			    </div>
			    
			    <div class="form-group" ng-class="{ 'has-error': eventForm.hikingElevation.$invalid }" >
			        <label class="control-label">Hiking elevation (eg. +600m  / -600 m) * : </label>
			        <input type="text" class="form-control" name="hikingElevation" ng-model="user.hikingElevation" required placeholder="Hiking elevation" />
			    </div>
			    
			    <div class="form-group" ng-class="{ 'has-error': eventForm.hikingLevel.$invalid }" >
			        <label class="control-label">Hiking level (eg. sportive) * : </label>
			        <input type="text" class="form-control" name="hikingLevel" ng-model="user.hikingLevel" required placeholder="Hiking level" />
			    </div>
			    
			    <div class="form-group" ng-class="{ 'has-error': eventForm.hikingDay.$invalid }">
			    	<label class="control-label">Hiking day (eg. Friday 2nd May) * : 
			        </label>
		            <p class="input-group">
		              <input type="date" class="form-control" datepicker-popup ng-model="user.hikingDay" is-open="status.opened" min-date="minDate" max-date="maxDate" datepicker-options="dateOptions" date-disabled="disabled(date, mode)" ng-required="true" close-text="Close" name="hikingDay" />
		              <span class="input-group-btn">
		                <button type="button" class="btn btn-default" ng-click="open($event)"><i class="glyphicon glyphicon-calendar"></i></button>
		              </span>
		            </p>
		        </div>
			    
			    <div class="form-group" ng-class="{ 'has-error': eventForm.hikingDay.$invalid }" >
			        <label class="control-label">Hiking link : 
			        </label>
			        <input type="text" class="form-control" name="hikingLink" ng-model="user.hikingLink" required placeholder="Hiking link" />
			    </div>
			    
			    <div class="form-group" ng-class="{ 'has-error': eventForm.carSharingCost.$invalid }" >
			        <label class="control-label">Blablacar estimated car sharing cost (per person) :</label>
			        <input type="text" class="form-control" name="carSharingCost" ng-model="user.carSharingCost" required placeholder="Car sharing cost" />
			    </div>
			    
			    <div class="form-group" style="height:1000px;" ng-class="{ 'has-error': eventForm.hikingMeetingTime.$invalid }" >
			        <label class="control-label">Meeting point time (eg. 9H30) * :</label>
			        <timepicker class="form-control" ng-model="user.hikingMeetingTime" ng-change="changed()" hour-step="hstep" minute-step="mstep" show-meridian="ismeridian" name="hikingMeetingTime" required></timepicker>
			    </div>
			    
			    <div class="form-group" ng-class="{ 'has-error': eventForm.hikingMeetingLocation.$invalid }" >
			        <label class="control-label">Meeting point location (eg. parking of Gourdon) * :</label>
			        <input type="text" class="form-control" name="hikingMeetingLocation" ng-model="user.hikingMeetingLocation" required placeholder="Hiking meeting location" />
			    </div>
			    
			    <div class="form-group" ng-class="{ 'has-error': eventForm.hikingMeetingGPS.$invalid }" >
			        <label class="control-label">Meeting point GPS coordinates (eg. 43.891660, 7.265675) :</label>
			        <input type="text" class="form-control" name="hikingMeetingGPS" ng-model="user.hikingMeetingGPS" required placeholder="Hiking meeting GPS" />
			    </div>
			    
			    <div class="form-group" ng-class="{ 'has-error': eventForm.hikingMeetingGPS.$invalid }" >
				  <label for="hikingOtherDetails" class="control-label">Hiking additional information :</label>
				  <textarea class="form-control" rows="5" id="hikingOtherDetails" name="hikingOtherDetails" ng-model="user.hikingOtherDetails" required placeholder="Hiking other details" ></textarea>
				</div>
			     
			    <div class="form-group" ng-class="{ 'has-error': eventForm.email.$invalid }" >
			        <label class="control-label">Email</label>
			        <input type="email" class="form-control" name="email" ng-model="user.email" required placeholder="Email" />
			    </div>
			    
			    <button ng-click="save()" class="btn btn-primary" ng-disabled="eventForm.$invalid" class="btn btn-primary">Create event</button>
			</form>
			<?php 
 		}
		?>
	</div>
   	<?php
	include 'scripts.php';
	?>
	<script src="js/create-event.js"></script>
  </body>
</html>