<?php


	function readf($readf){

	$file = fopen ($readf, 'r+');
	$quq = file ($readf);			
	return $quq;
	}	
	
	function linelength($lenght){
		
		$amount_elem = count($lenght);
		$summ_elem = 0;
		for ($i=0; $i<$amount_elem; $i++){
		$summ_elem += (iconv_strlen($lenght[$i]));
		}
		$aver_str = $summ_elem/$amount_elem;
		return $aver_str;
		}
		
    
	function rec ($readf,$lenght,$wrtfille){
		
		$openrec = fopen($wrtfille, "w+");
		for ($i = 0; $i < count($lenght); $i++){
	  	if(iconv_strlen($lenght[$i])>$readf){
		fwrite($openrec, $lenght[$i]);

	}
	}
	
	}
	
	
	$b = readf ('c:\users\user\desktop\hw3\counter.txt');
	$v = linelength ($b);
	$rs= rec ($v,$b,'c:\users\user\desktop\hw3\stroki.txt');