<?php
/**
* Add event
* @return array
* @param fichier
* @desc Ajouter un nouveau menu defilant
*/
function addEvent($db, $event_organiser, $how_to_find_us, $name, $description, $rsvp_limit, $time)
{
	$sql = 'INSERT INTO event (event_organiser, how_to_find_us, name, description, rsvp_limit, time) ';
	$sql .= "VALUES (:event_organiser, :how_to_find_us, :name, :description, :rsvp_limit, :time);";
	
    $stmt = $db->prepare($sql);
	$stmt->bindParam(':event_organiser', $event_organiser);
	$stmt->bindParam(':how_to_find_us', $how_to_find_us);
	$stmt->bindParam(':name', $name);
	$stmt->bindParam(':description', $description);
	$stmt->bindParam(':rsvp_limit', $rsvp_limit);
	$stmt->bindParam(':time', $time);
	$stmt->execute();
	
	return $db->lastInsertId();
}
?>