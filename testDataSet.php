<?php 
	
	require('MultiStringMatcher.php');

	use AhoCorasick\MultiStringMatcher;

	// Create FSM with AhoCorasick
	$array = file("payload.txt", FILE_IGNORE_NEW_LINES);
	$keywords = new MultiStringMatcher($array);

	//Read queries one by one and test

	$k = 0;
	$ans = 0;
	$file = fopen('SQL_Injection_Dataset.csv', 'r');
	while (($line = fgetcsv($file)) !== FALSE && $k<=1000) {
		
		//replace same number occurence with x=x, Generics to improve pattern match
		$mod_string = preg_replace('/(\d+)\s*=\s*\1/', 'x=x', $line[0]);
		$k++;
		
		$results = $keywords->searchIn($mod_string);
		if(count($results)>0){
			$ans++;
		}
		else{
			//analzing incorrect classified ones
			//echo $line[0]
		}
	}
	echo $ans;
	fclose($file);
?>
