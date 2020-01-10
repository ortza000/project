<?php
require_once("connectdb.php");


$Txtcode = $_POST["Txtcode"];
$Txtcode_name = $_POST["Txtcode_name"];
$Txtcode_year = $_POST["Txtcode_year"];
$Txtcode_phone = $_POST["Txtcode_phone"];
$Txtcode_major = $_POST["Txtcode_major"];
$Txtcode_status = $_POST["Txtcode_status"];
$Txtcode_card = $_POST["Txtcode_card"];
//  echo $Txtcode;
//  echo $Txtcode_name;
//  echo $Txtcode_year;
//  echo $Txtcode_phone;
//  echo $Txtcode_major;
//  echo $Txtcode_status;

//---->สร้างคำสั่ง add



$sql = "INSERT INTO student(`std_id`, `std_name`,`std_card`,`std_year`,`std_phone`,`std_major`,`std_status`) 

VALUES ('$Txtcode','$Txtcode_name','$Txtcode_card','$Txtcode_year','$Txtcode_phone','$Txtcode_major','$Txtcode_status')";

						// echo"<br>   sql-->$sql";
						//echo"<br>   sql-->$sql1";
						//-->ส่งคำสั่งไปให้ dbms run sql
						 $result = mysqli_query($con,$sql);




?>
<meta http-equiv="refresh" content="0;URL=about-me.php" >