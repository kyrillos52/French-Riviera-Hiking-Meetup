<?php
//demarrage de la session
session_start();

include_once ('settings.inc.php');
include_once ('common.inc.php');
include_once ('Mobile_Detect.php');

$detect = new Mobile_Detect();

$dsn = "mysql:dbname=".$GLOBALS['dbname'].";host=".$GLOBALS['dbhost'];

try {
    $bdd = new PDO($dsn, $GLOBALS['dbuser'], $GLOBALS['dbpassword']);
} catch (PDOException $e) {
    echo 'Connection failed';
}
?>