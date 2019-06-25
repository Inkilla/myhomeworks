<?php

$numb_array = array(33,21,44,55,22,103,52,63,13,9);

function search($sea){
$numb = count($sea);
$q = " ";
for ($i = 0; $i < $numb; $i++) {
	
 	if ($q < $sea[$i]){
 		$q = $sea[$i];



}
}
echo $q;
}

search ($numb_array);
