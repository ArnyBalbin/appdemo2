<?php

	function conexion(){

	$host = "host=tramway.proxy.rlwy.net";
	$port = "port=51058";
	$dbname = "dbname=railway";
	$user = "user=postgres";
	$password = "password=DTzSkWJHwCZWfkESsbvytKcdxpxIThys";

	$db = pg_connect("$host $port $dbname $user $password");

	return $db;
}
?>