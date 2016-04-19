<?php
/**
* Add event
* @return array
* @param fichier
* @desc Ajouter un nouveau menu defilant
*/
function addEvent($db, $event_organiser, $how_to_find_us, $name, $description, $rsvp_limit, $time, $venueId, $venueName, $venueAddress, $venueCity, $venueCountry, $lat, $lon)
{
	$sql = 'INSERT INTO event (event_organiser, how_to_find_us, name, description, rsvp_limit, time, venueId, venueName, venueAddress, venueCity, venueCountry, lat, lon) ';
	$sql .= "VALUES (:event_organiser, :how_to_find_us, :name, :description, :rsvp_limit, :time, :venueId, :venueName, :venueAddress, :venueCity, :venueCountry, :lat, :lon);";
	
    $stmt = $db->prepare($sql);
	$stmt->bindParam(':event_organiser', $event_organiser);
	$stmt->bindParam(':how_to_find_us', $how_to_find_us);
	$stmt->bindParam(':name', $name);
	$stmt->bindParam(':description', $description);
	$stmt->bindParam(':rsvp_limit', $rsvp_limit);
	$stmt->bindParam(':time', $time);
	$stmt->bindParam(':venueId', $venueId);
	$stmt->bindParam(':venueName', $venueName);
	$stmt->bindParam(':venueAddress', $venueAddress);
	$stmt->bindParam(':venueCity', $venueCity);
	$stmt->bindParam(':venueCountry', $venueCountry);
	$stmt->bindParam(':lat', $lat);
	$stmt->bindParam(':lon', $lon);
	$stmt->execute();
	
	return $db->lastInsertId();
}

/**
* @return boolean
* @param db
* @desc Read travel category
*/	
function readEventId($db, $eventId)
{
	$sql = 'SELECT * ';
	$sql .= 'FROM event ';
	$sql .= 'WHERE event_id = :eventId';
	
    $stmt = $db->prepare($sql);
	$stmt->bindParam(':eventId', $eventId);
	$stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
	
	if(sizeof($result) > 0) {
		return $result[0];
	}
	else {
		return null;
	}
}
?>