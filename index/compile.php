<?php

	$languageID=$_POST["language"];
        if (move_uploaded_file($_FILES['file']['tmp_name'],$_FILES['file']['name']))
	//if($_FILES["file"]["name"]!="")
	{
		//include "../compilers/make.php";
	}
	else
	{
		switch($languageID)
			{
				case "c":
				{
					include("../compilers/c2.php");
					break;
				}
				case "cpp":
				{
					include("../compilers/cpp2.php");
					break;
				}
				case "java":
				{	
					include("../compilers/java.php");
					break;
				}
				case "python2.7":
				{
					include("../compilers/python27.php");
					break;
				}
				case "python3.2":
				{
					include("../compilers/python32.php");
					break;
				}
			}
	}
?>
