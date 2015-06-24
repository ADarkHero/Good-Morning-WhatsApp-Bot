<?php

	require_once '../whatsprot.class.php';
	$username = "436646473355"; //Mobile Phone prefixed with country code so for india it will be 91xxxxxxxx
	$password = "Z10t1ePNG1CsjZy5hrnHgXm/v1g=";
	 
	$w = new WhatsProt($username, 0, "ADarkHero Whatsapp Bot", true); //Name your application by replacing "WhatsApp Messaging"
	$w->connect();
	$w->loginWithPassword($password);

	$w->eventManager()->bind("onGetGroups", "onGetGroups");
	$w->sendGetGroups();
		
	
	function onGetGroups($phone,$groups)
	{
		echo var_dump($groups);
	}
		
?>


