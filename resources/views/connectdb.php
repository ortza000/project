<?php
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbname = "project_it";

	$con=mysqli_connect($dbhost ,$dbuser ,$dbpass ,$dbname );
	if(mysqli_connect_errno())
	{
		echo "59310271_Failed to connect to MySQL : " . mysqli_connect_error();
	}
	
	//mysqli_query($con,'SET NAMES UTF8');
	$con->set_charset("utf8");

?>