<?php
//demarrage de la session
session_start();

include_once ('settings.inc.php');
include_once ('common.inc.php');
include_once ('Mobile_Detect.php');

$detect = new Mobile_Detect();

$dsn = "mysql:dbname=".$_CONFIG['dbname'].";host=".$_CONFIG['dbhost'];

try {
    $bdd = new PDO($dsn, $_CONFIG['dbuser'], $_CONFIG['dbpassword']);
} catch (PDOException $e) {
    echo 'Connection failed';
}
?>