<?php
/**
* @return boolean
* @desc Indicate if the user is authenticated
*/
function isAuthenticated()
{
	if(isset($_SESSION['name'])) {
		return true;
	} else {
		return false;
	}
}

/**
* @return string mail content
* @param string
* @desc Return template mail content
*/
function templateMailContent($hikingName, $hikingDay, $hikingLevel, $hikingDuration, $hikingElevation, $hikingMeetingLocation, $hikingMeetingTime, $hikingMeetingGPS, $hikingOtherDetails, $hikingLink, $carSharingCost,  $organiserName, $organiserPhone) {
	
	ob_start();
	?>
	<p>Hello everyone,</p>
	
	<p>I hope you are all well. If the forecast is good on <?php echo $hikingDay ?>, I suggest you the hiking <?php echo $hikingName ?>. It's a <?php echo $hikingLevel ?> level hiking.</p>
	
	<?php
	if($hikingOtherDetails != "")
	{
	?>
	<p><?php echo $hikingOtherDetails ?></p>
	<?php 
	}?>
	
	<p>Hiking details:<br/>
	Name : <?php echo $hikingName ?><br/>
	Duration : <?php echo $hikingDuration ?> (more with stops)<br/>
	Elevation: <?php echo $hikingElevation ?><br/>
	Difficulty: <?php echo $hikingLevel ?><br/>
	<?php
	if($hikingLink != "")
	{
	?>
	<a href="<?php echo $hikingLink ?>">Link</a><br/>
	<?php
	}
	?>
	<?php
	if($carSharingCost != "")
	{
	?>
	<a href="http://www.blablacar.fr">Blablacar</a> estimation car sharing costs (per person): <?php echo $carSharingCost ?><br/>
	<?php
	}
	?>
	Meeting Point: <?php echo $hikingMeetingTime ?> at <?php echo $hikingMeetingLocation ?><?php if($hikingMeetingGPS != "") {?> (GPS coordinates: <a href="https://www.google.fr/maps/place/<?php echo $hikingMeetingGPS ?>"><?php echo $hikingMeetingGPS ?></a>)<?php }?>.</p>
	
	<p>Here is my phone number just in case: <?php echo $organiserPhone ?></p>
	
	<p>The usual expected material are hiking shoes, rain coat, hot coat, picnic and water.</p>
	
	<p>The meeting point is at <?php echo $hikingMeetingLocation ?> at <?php echo $hikingMeetingLocation ?><?php if($hikingMeetingGPS != "") {?> (GPS coordinates: <a href="https://www.google.fr/maps/place/<?php echo $hikingMeetingGPS ?>"><?php echo $hikingMeetingGPS ?></a>)<?php }?>. If you need a ride from Nice or somewhere else, please ask in the comment section.</p>
	<p>Hope to see many of you,</p>
	<p><?php echo $organiserName ?><br/>French Riviera Hiking Meetup Event Organiser</p>
	</div>
	
	<?php
	$hikingMailContent = ob_get_contents();
	ob_end_clean();
	return $hikingMailContent;
}
?>