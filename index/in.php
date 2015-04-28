<?php
	$CC="g++";
	$out="./a.out";
	$code=$_POST["code"];
	$input=$_POST["input"];
	$filename_code="main.cpp";
	$filename_in="input.txt";
	$filename_error="error.txt";
	$executable="a.out";
	$command="g++ -lm main.cpp";	
	$command_error=$command." 2>".$filename_error;

	shell_exec($command_error);
	

	
			$output=shell_exec($out);
		
		echo "<pre>$output</pre>";
	
	
	
?>
