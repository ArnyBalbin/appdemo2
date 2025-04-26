<?php

	function conexion(){

	$host = "host=tramway.proxy.rlwy.net:51058";
	$port = "port=5432";
	$dbname = "dbname=railway";
	$user = "user=postgres";
	$password = "password=DTzSkWJHwCZWfkESsbvytKcdxpxIThys";

	$db = pg_connect("$host $port $dbname $user $password");

	return $db;
}
?>