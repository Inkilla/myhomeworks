<?php

$poem = array(
				"I put on my tie,",
				"I put on my shoes,",
				"I put on my shirt,",
				"And my trousers, too,",
				"I put on my jacket,",
				"I put on my hat,",
				"Look! Im a clown,",
				"And who are you?");
print_r($poem);


function account ($poem){
foreach ($poem as $i){
$scor = strlen($i);
	


echo $scor .PHP_EOL;
}
}	
account ($poem);
