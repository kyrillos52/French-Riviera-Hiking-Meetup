<?php
include '../includes/settings.inc.php';
include '../fcts/restclient.class.php';

$rest = new RestClient();

if(isset($_GET['action']) && $_GET['action'] == "logout") {
	
	$_SESSION = array();
	
	if (ini_get("session.use_cookies")) {
	    $params = session_get_cookie_params();
	    setcookie(session_name(), '', time() - 42000,
	        $params["path"], $params["domain"],
	        $params["secure"], $params["httponly"]
	    );
	}
	
	session_destroy();
}

if(isset($_GET['code'])) {
	
	$_SESSION['meetupToken'] = $_GET['code'];
	
	$authorisationData = array (
	    "client_id"    	=> $_CONFIG['meetupKey'],
	    "client_secret" => $_CONFIG['meetupSecret'],
	    "grant_type"    => "authorization_code",
	    "redirect_uri"  => $_CONFIG['meetupWebsite'],
	    "code"   		=> $_SESSION['meetupToken']
	);
	
	//Reset application authorisation
	$reply = $rest->setUrl('https://secure.meetup.com/oauth2/access')->post($authorisationData);
	
	$_SESSION['access_token'] = $reply['access_token'];
	
	//Read profile
	$profil = $rest->setUrl('https://api.meetup.com/2/member/self/?access_token='.$_SESSION['access_token'])->get();
	
	$_SESSION['name'] = $profil['name'];
	$_SESSION['thumb_link'] = $profil['photo']['thumb_link'];
	$_SESSION['id'] = $profil['id'];
}
?>