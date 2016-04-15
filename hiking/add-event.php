<?php
$result['data'] = 'unknown';

$postdata = file_get_contents("php://input");
$request = json_decode($postdata);

if(isset($request->organiserName) && isset($request->organiserPhone) && isset($request->name) && isset($request->duration) && isset($request->elevation) && isset($request->level) && isset($request->date) && isset($request->location) && isset($request->latitude) && isset($request->longitude) && isset($request->numberOfPeople)) {
	
	try {
		
	    
	    
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