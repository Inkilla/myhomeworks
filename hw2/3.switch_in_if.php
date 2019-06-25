<?php
echo "Give me the mark!\n";
$handle = fopen ("php://stdin", "r");
$number = fgets($handle);

if($number > 10);
	elseif (($number > 1) && ($number < 3)) {
	echo "I am better!!";
}	elseif (($number > 2) && ($number < 4)) {
	echo "OK :(";
}	elseif (($number > 3) && ($number < 5)) {
	echo "I am good :)";
}	elseif (($number > 4) && ($number < 6)) {
	echo "YeeeeWhaaaaa!!!!!";
	

} else echo "\n";