<?php 

	require_once '../class/Api.class.php';
		
		$api = new Api();
		$api->privateKey = 'e518ddbbf6566814b968a2c1b3323875cfe6dd0b';
		$api->publicKey = 'a2ea40b3334c88a9b13aa0f2f112fb4d';

		$api->connect();