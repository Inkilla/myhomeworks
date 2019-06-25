<?php


		$sx = rodri ('c:\users\user\desktop\HW3\counter.txt');
		function rodri ($readfile){
		$file = fopen($readfile, 'r+');
		$q = file ($readfile);	
			return $q;
		fclose($file);
		 }
		 echo $file ;

		writ ($sx,'c:\users\user\desktop\hw3\countercreat.txt');
		function writ ($readfile,$wr){		
		$w = count($readfile);
		$e = fopen($wr, 'w');
		for ($r = 0 ; $r < $w; $r += 2) {
		fwrite ($e,$readfile[$r]);
		}
		fclose($e);
		}
		echo '5.06 - 10.06';
		