<?php
$code=$_POST["code"];
$input=$_POST["input"];
$file=fopen("main.cpp","w+");
fwrite($file,$code);
fclose($file);
$file2=fopen("input.txt","w+");
fwrite($file2,$input);
fclose($file2);
shell_exec("g++ main.cpp");
$output=shell_exec("./a.out < input.txt");
echo $output;


?>
