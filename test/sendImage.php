<?php

	require_once '../whatsprot.class.php';
	$username = "436646473355"; //Mobile Phone prefixed with country code so for india it will be 91xxxxxxxx
	$password = "Z10t1ePNG1CsjZy5hrnHgXm/v1g=";
	 
	$w = new WhatsProt($username, 0, "ADarkHero Whatsapp Bot", true); //Name your application by replacing "WhatsApp Messaging"
	$w->connect();
	$w->loginWithPassword($password);
	
	
	
	
	$to = "436605635662";
	$filepath = "testImage.png"; // This could be url or path to video.

	$w->SendPresenceSubscription($to); //Let us first send presence to user
	$w->sendMessageImage($to, $filepath, false, 0, "", ""); // Send Message
	
	$w->pollMessage();
		
?>