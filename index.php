<?php
	
	$targets = array("436605635662", 
	"4916096782533",
	"436648204112"); //Who should get a message?
	$messages = array("Einen wundervollen guten Morgen!", 
	"Guten Morgen! <3", 
	"Ich hoffe, Sie hatten eine wundervolle Nacht!",
	"Dies ist eine 'Guten Morgen' Nachricht.",
	"Guten Morgen, Welt und alle, die sie bevölkern!",
	"*Weckton* 🔊");
	
	$messages02 = array('"Wenn zwei Philosophen zusammentreffen, ist es am vernünftigsten, wenn sie zueinander bloß '."'Guten Morgen'".' sagen." - Jean Paul Sartre',
	'"Our days are happier, when we give people a bit of our heart rather than a piece of our mind."',
	'"Die höchste Form des Glücks ist ein Leben mit einem gewissen Grad an Verrücktheit." - Erasmus von Rotterdam',
	'"Alles ist gut. Der Mensch ist unglücklich, weil er nicht weiß, dass er glücklich ist. Nur deshalb. Das ist alles, alles! Wer das erkennt, der wird gleich glücklich sein, sofort im selben Augenblick." - Fjodor Michailowitsch Dostojewski',
	'"Man sagt, am Ende ist alles gut und ist es nicht gut, ist es verdammt noch mal nicht das Ende. Nein!" - Casper'
	); //List of possible messages
	$messagesize = count($messages) - 1; //Random message
	$messagesize02 = count($messages02) - 1; 
	
	$random = rand(0, $messagesize);
	$message = $messages[$random]; //Get a random message
	
	$random02 = rand(0, $messagesize02);
	$message02 = $messages02[$random02]; //Get a random message
	
	echo "\n";
	echo date('H:i:s', time());
	echo "\n";
	echo $message;
	echo "\n";

	echo "Message sent!";
	echo "\n\n\n\n\n";

	require_once 'whatsprot.class.php';
	$username = "436646473355"; //Mobile Phone prefixed with country code so for india it will be 91xxxxxxxx
	$password = "Z10t1ePNG1CsjZy5hrnHgXm/v1g=";
	 
	$w = new WhatsProt($username, 0, "ADarkHero Whatsapp Bot", true); //Name your application by replacing "WhatsApp Messaging"
	$w->connect();
	$w->loginWithPassword($password);

	foreach($targets as $target){
		$w->SendPresenceSubscription($target); //Let us first send presence to user
		$w->sendMessage($target,$message ); // Send Message
		$w->sendMessage($target,$message02 ); // Send Message
	}	 

	echo "\n";
	
?>