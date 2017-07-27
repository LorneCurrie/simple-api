<?php


for($i = 1; $i < count($lines); $i++){
	$info = explode(",",$lines[$i]);
	if ($_SERVER["HTTP_HOST"] == $info[0]){
		$_CONFIG['DB_IP'] = $info[1];
		$_CONFIG['LIVE_DB'] = $info[2];
		$live_db = $info[2];
		$history_db = $info[3];
		break;
	}
}

$conn = mysql_connect($_CONFIG['DB_IP'], $_CONFIG['DB_UID'], $_CONFIG['DB_PWD']) or die("Unable to connect to database");


?>