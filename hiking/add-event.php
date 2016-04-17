<?php
include '../includes/config.inc.php';
include '../fcts/hiking.fct.php';
include '../fcts/event.fct.php';
include '../fcts/mail.fct.php';

$result['data'] = 'unknown';

$postdata = file_get_contents("php://input");
$request = json_decode($postdata);

if(isset($request->organiserName) && isset($request->organiserPhone) && isset($request->name) && isset($request->duration) && isset($request->elevation) && isset($request->level) && isset($request->date) && isset($request->location) && isset($request->latitude) && isset($request->longitude) && isset($request->numberOfPeople)) {
	
	try {
		
		$description = templateMailContent($request->name, $request->level, $request->duration, $request->elevation, $request->location, $request->date, "$request->latitude,$request->longitude", $request->additionalInfo, $request->link, '', $request->organiserName, $request->organiserPhone);
		
		$date = DateTime::createFromFormat('d/m/Y H:i', $request->date);
		
	    $lastId = addEvent($bdd, $_SESSION['id'], $request->location, $request->name, $description, $request->numberOfPeople, date_format($date, 'Y-m-d H:i:s'));
	    
	    $hikingMail = "<p>Click <a href=\"http://hiking.cyril-grandjean.fr/validate-event.php?id=$lastId\">here</a> to validate this hiking request ? :</p>$description";
	    
	    sendHtmlEmailToAdmin($request->name, 'noreply@cyril-grandjean.fr', "Hiking request ".$request->name." by ".$_SESSION['name'], $hikingMail);
	    
	    $result['data'] = 'success';
	    
	} catch (Exception $e) {
		
		//header("HTTP/1.1 500 Internal Server Error");
		$result['data'] = 'error';
		$result['error'] = 'Exception occurred: '+$e->getMessage();
	}
	
} else {
	
	//header("HTTP/1.1 500 Internal Server Error");
	$result['data'] = 'error';
	$result['error'] = 'Exception occurred: Not every required fields entered';
}

echo json_encode($result);
?>