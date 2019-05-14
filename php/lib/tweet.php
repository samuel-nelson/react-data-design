<?php
require_once(dirname(__DIR__) . "/vendor/autoload.php");
require_once(dirname(__DIR__) . "/classes/autoload.php");
require("uuid.php");

$secrets = new \Secrets("/etc/apache2/capstone-mysql/ddctwitter.ini");
$pdo = $secrets->getPdoObject();

use  UssHopper\DataDesign\{Tweet, Profile};



$password = "abc123";
$hash = password_hash($password, PASSWORD_ARGON2I, ["time_cost" => 384]);


////$tweet = new Tweet(generateUuidV4(), $profile->getProfileId(),"Let Them Eat Cake",  new \DateTime());
////$tweet->insert($pdo);
////
////$tweet1 = new Tweet(generateUuidV4(), $profile->getProfileId(), "Let them get loans", new \DateTime());
////$tweet1->insert($pdo);
////
////$tweet2 = new Tweet(generateUuidV4(), $profile->getProfileId(), "Let them eat cake and get loans", new \DateTime());
////$tweet2->insert($pdo);
////
////$tweet3 = new Tweet(generateUuidV4(), $profile->getProfileId(), "I like cake", new \DateTime());
////$tweet3->insert($pdo);


$tweets = Tweet::getTweetByTweetContent($pdo, "Cake");

