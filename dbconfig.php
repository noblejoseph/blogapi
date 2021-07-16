<?php

$DBhost = "localhost";

$DBuser = "root";

$DBpassword = "";

$DBname = "blog";

 $conn =mysqli_connect($DBhost,$DBuser,$DBpassword,$DBname);
 
 if(!$conn)
 
	{
		die ("Connection Failed: :" .mysqli_connect_error());
	}
 ?>