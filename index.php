<?php
	include_once 'lib/status.class.php';
	$status = new MinecraftServerStatus();
	$response = $status->getStatus('$_GET["ip"]');
	if(!$response) {
		echo"false";
	} else {
		echo"true ".$response['hostname']." ".$response['version']." ".$response['players']." ".$response['maxplayers']." ".$response['motd']." ".$response['ping']." ";
	}

?>