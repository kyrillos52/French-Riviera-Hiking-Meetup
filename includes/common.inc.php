<?php
function pre_quoting($str) {
	if (!get_magic_quotes_gpc()) {
		return addslashes($str);
	}
	else return $str;
}
function un_quoting($str) {
	if (!get_magic_quotes_gpc()) {
		return stripslashes($str);
	} else return $str;	
}
function pre_quoting_run($str) {
	if (!get_magic_quotes_runtime()) {
		return addslashes($str);
	}
	return $str;
}
function un_quoting_run($str) {
	if (!get_magic_quotes_runtime()) {
		return stripslashes($str);
	} return $str;	
}
