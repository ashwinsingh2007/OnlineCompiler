<?php
$code=$_POST["code"];
$input=$_POST["input"];
$file=fopen("mainc.cpp","w+");
fwrite($file,$code);
fclose($file);
$file2=fopen("inputc.txt","w+");
fwrite($file2,$input);
fclose($file2);
shell_exec("gcc mainc.cpp");
$output=shell_exec("./a.out < inputc.txt");
echo $output;


?>
