<?php
require_once("connectdb.php");


$Txtcode = $_POST["Txtcode"];
$Txtcode_name = $_POST["Txtcode_name"];
$Txtcode_dis = $_POST["Txtcode_dis"];

//  echo $Txtcode;
//  echo $Txtcode_name;
//  echo $Txtcode_year;
//  echo $Txtcode_phone;
//  echo $Txtcode_major;
//  echo $Txtcode_status;

//---->สร้างคำสั่ง add



$sql = "INSERT INTO projectandevent(`pro_id`, `pro_name`,`pro_des`) 

VALUES ('$Txtcode','$Txtcode_name','$Txtcode_dis')";

						//  echo"<br>   sql-->$sql";
						//echo"<br>   sql-->$sql1";
						//-->ส่งคำสั่งไปให้ dbms run sql
						 $result = mysqli_query($con,$sql);




?>
<meta http-equiv="refresh" content="0;URL=event.php" >