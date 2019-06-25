<?php

$str_array = array (
					
				"I put on my tie,",
				"I put on my shoes,",
				"I put on my shirt,",
				"And my trousers, too,",
				"I put on my jacket,",
				"I put on my hat,",
				"Look! Im a clown,",
				"And who are you?");
	print_r($str_array);


function search_str($str_array){
	$con = count($str_array);
	$str = 0;
	$symb = 0;
	for($i = 0; $i < $con ; $i++){
	if((strlen($str_array[$i])) > ($str)){
			$str = strlen($str_array[$i]);
			$symb = $i;

		}

	
	  
	}
echo $symb .PHP_EOL;
echo $str;
}

	search_str ($str_array);