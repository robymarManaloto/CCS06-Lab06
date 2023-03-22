<?php

$name = $argv[1];
$year = $argv[2];

$age = idate("Y")- $year; //AGE
$message = "Your name is ".$name.", and your age is ".$age." years old.";
if($age >= 18){	$message .= "\nYou are a voter."; }
if($age >= 60){ $message .= "\nYou are a senior citizen."; }

echo $message;

?>