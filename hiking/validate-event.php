<?php
include '../includes/config.inc.php';
include '../includes/settings.inc.php';
include '../fcts/hiking.fct.php';
include '../fcts/restclient.class.php';
include '../fcts/event.fct.php';

//If the user is logged and the event id is set
if(isAuthenticated() && $_SESSION['id'] == $GLOBALS['organiserId'] && isset($_GET['id'])) {
	
	$event = readEventId($bdd, $_GET['id']);
	
	$venueId = $event['venueId'];
	
	$accessData = array (
	    "access_token"    	=> $_SESSION['access_token']
	);
	
	$rest = new RestClient();
	
	if($event['venueId'] == 0) {
		
		$venueData = array (
			"name" => $event['venueName'],
		    "address_1"    	=> $event['venueAddress'],
		    "city" => $event['venueCity'],
		    "country"    => $event['venueCountry']
		);
		
		$data = $rest->setUrl('https://api.meetup.com/'.$GLOBALS['group_urlname'].'/venues')->post($venueData, $accessData);
		
		$venueId = $data['id'];
	}
	
	$eventData = array (
	    "name"    	=> $event['name'],
	    "group_id" => $GLOBALS['group_id'],
	    "group_urlname"    => $GLOBALS['group_urlname'],
	    "description" => $event['description'],
	    "event_hosts" => $event['event_organiser'],
	    "rsvp_limit" => $event['rsvp_limit'],
	    "how_to_find_us" => $event['how_to_find_us'],
	    "time" => strtotime($event['time'])*1000,
	    "publish_status"  => "draft",
	    "venue_id" => $venueId
	); 
	
	print_r($eventData);
	
	$data = $rest->setUrl('https://api.meetup.com/2/event')->post($eventData, $accessData);
	
} else {
	header("HTTP/1.1 403 Access denied");
	echo 'Access denied';
}
?>