<?php

	require_once '../whatsprot.class.php';
	$username = "436646473355"; //Mobile Phone prefixed with country code so for india it will be 91xxxxxxxx
	$password = "Z10t1ePNG1CsjZy5hrnHgXm/v1g=";
	 
	$w = new WhatsProt($username, 0, "ADarkHero Whatsapp Bot", true); //Name your application by replacing "WhatsApp Messaging"
	$w->connect();
	$w->loginWithPassword($password);
	
	
	
	for($i = 0; $i < 100; $i++){
		
		$target = "436503801794";
		$message = "Nid imma in WhatsApp schreib! 🐌";

		$w->SendPresenceSubscription($target); //Let us first send presence to user
		$w->sendMessage($target,$message); // Send Message
	
	}
		
?>