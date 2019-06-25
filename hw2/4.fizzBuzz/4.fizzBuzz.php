<?php

echo "\npls F";
echo " \npls B";
echo "\npls last number.\n";
$handle = fopen ("php://stdin","r");

$line = fgets ($handle);
$line1 = fgets ($handle);
$line2 = fgets ($handle);
$q = 0;

while ($q <= $line2 -1 ){
	$q++;		
	if (($q % $line == 0) && ($q % $line1 == 0)) {
		echo "FB";
}	elseif ($q % $line == 0) {
		echo "F";
}	elseif ($q % $line1 == 0) {
		echo "B"; 
}	else echo "$q";
}


