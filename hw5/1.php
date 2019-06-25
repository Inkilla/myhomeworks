<?php

define("NUMBER", 5);
$sum = 0;
for ($i= 0; $i < 100; $i++) { 
	if ($i % NUMBER == 0) {

		$sum = $sum + 1;
		
	}
}
echo $sum;