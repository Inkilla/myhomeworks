<?php

echo "How old are you?\n";
$handle = fopen ("php://stdin","r");
$number = fgets($handle);

if ($number < 15) {
    echo "GO DO YOUR HOMEWORK, LITTLE SNOT!!!"; 
} elseif (($number > 15) && ($number < 21)) {
	echo "Okey, you may grab some beer."; 
} elseif (($number > 21) && ($number < 28)) { 
	echo "Drink something stronger"; 


} elseif (($number > 28) && ($number < 35)) {
	echo "Better go to the gym!";
} elseif (($number > 35) && ($number < 50)) {
	echo "Time to take care of your health"; 
} else echo "You must be kidding =)"; 

echo "\n";
if ($number > 51) echo "\nIf you are still alive, vodka won't kill you!\n";
