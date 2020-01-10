<?php
include 'connectdb.php';

$w = $_GET['term'];
$sql = "Select course_name From course Where course_name Like '{$w}%' ";
$rs = mysql_query($sql);
$json = array();
while($row = mysqli_fetch_assoc($rs)){
	$json[] = $row['course_name'];
}
mysql_free_result($rs);

$json = json_encode($json);
echo $json;
?>