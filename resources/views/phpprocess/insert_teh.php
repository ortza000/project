
<?php
require_once("connectdb.php");


$Txtcode = $_POST["Txtcode"];
$Txtcode_name = $_POST["Txtcode_name"];
$Txtcode_qt = $_POST["Txtcode_qt"];
$Txtcode_phone = $_POST["Txtcode_phone"];
$Txtcode_email = $_POST["Txtcode_email"];

//  echo $Txtcode;
//  echo $Txtcode_name;
//  echo $Txtcode_year;
//  echo $Txtcode_phone;
//  echo $Txtcode_major;
//  echo $Txtcode_status;

//---->สร้างคำสั่ง add



$sql = "INSERT INTO teacher(`teh_id`, `teh_name`,`teh_phone`,`teh_qualification`,`teh_email`) 

VALUES ('$Txtcode','$Txtcode_name','$Txtcode_phone','$Txtcode_qt','$Txtcode_email')";

						echo"<br>   sql-->$sql";
						//echo"<br>   sql-->$sql1";
						//-->ส่งคำสั่งไปให้ dbms run sql
						 $result = mysqli_query($con,$sql);




?>
<meta http-equiv="refresh" content="0;URL=index.php" >