<?php

define("SEARCH_PNUMBERS", 100);

function prime_numbers($pn){

$prime = array();
$prime_numb = 2;
$isprime = true;
$sum = 0;
while (sizeof($prime) < $pn) {
	for ($i=2; $i < $prime_numb; $i++) { 
	if ($prime_numb % $i == 0) {
		$isprime = false;

		
	}
		
	}
	if ($isprime){
		array_push ($prime, $prime_numb);
	}

	$isprime = true;
	$prime_numb++;
}
for ($i=0; $i < sizeof($prime); $i++) { 
	$sum += $prime[$i];
}
echo $sum;
}

prime_numbers (SEARCH_PNUMBERS);
