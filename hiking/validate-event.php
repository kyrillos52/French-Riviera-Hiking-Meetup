<?php
include '../includes/config.inc.php';
include '../fcts/hiking.fct.php';
include '../fcts/restclient.class.php';
include '../fcts/event.fct.php';

//If the user is logged and the event id is set
if(isAuthenticated() && $_SESSION['id'] == $GLOBALS['organiserId'] && isset($_GET['id'])) {
	
	$event = readEventId($bdd, $_GET['id']);
	
	$eventData = array (
	    "name"    	=> $event['name'],
	    "group_id" => $GLOBALS['group_id'],
	    "group_urlname"    => $GLOBALS['group_urlname'],
	    "description" => $event['description'],
	    "hosts" => $event['event_organiser'],
	    "rsvp_limit" => $event['rsvp_limit'],
	    "how_to_find_us" => $event['how_to_find_us'],
	    "time" => strtotime($event['time'])*1000,
	    "publish_status"  => "draft"
	);
	
	$accessData = array (
	    "access_token"    	=> $_SESSION['access_token']
	); 
	
	$rest = new RestClient(); 
	
	$data = $rest->setUrl('https://api.meetup.com/2/event')->post($eventData, $accessData);
	
} else {
	header("HTTP/1.1 403 Access denied");
	echo 'Access denied';
}
?>