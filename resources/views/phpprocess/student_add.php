<?php
 include 'head.php';
?>
<br>
<br>
<br>
<br>
<br>

<center>
	<table width="90%" border="0" align="center" cellpadding="0" cellspacing="0">
      <tbody>
	     <tr>
	       <br><font color="black" size="15">เพิ่มข้อมูลนิสิต</font></br> 
      </tr>
  </tbody></table>
  <br>
  
<form name="form1" method="post" enctype="multipart/form-data" action="insert_std.php">
				
<?php
// รับค่าตัวแปรจากกดปุ่ม แก้ไขTxtPOS_ID=0&method
// Input from POST


//echo"<br>method-->$method<br> Txtcus_id-->$Txtcus_id<br>";

     $SQLfindnextcode="Select * FROM student order by std_id DESC limit 1 "; 
     $dbrunquery = mysqli_query($con ,$SQLfindnextcode) ;
     $result=mysqli_fetch_array($dbrunquery);
     $numid=$result['std_id'];
      //CH100
	  $num1= substr($numid,2);//100
	
	  $count = $num1+1;//101
	 
      $run1 = sprintf("SD"."%03d",$count);//CH101
      $pnum = $run1;

   
  
?>    
	<table  cellpadding="0" cellspacing="0">
					
				<tr>
					
				  </tr>

					<tr>
						<td width="42%">รหัสสินค้า </td>
						<td width="60%"><input name="Txtcode" readonly type="text" id="textfield" value="<?php  echo $run1; ?>" size="4" maxlength="5" ></td>
					</tr>

					<tr>
            <td><span class="fonts">ชื่อนิสิต &nbsp;</td>
            <td><input name="Txtcode_name" type="text" id="textfield" value=""size="20"></td>
		  </tr> 
		  <tr>
            <td><span class="fonts">รหัสนิสิต &nbsp;</td>
            <td><input name="Txtcode_card" type="number" id="textfield" value=""size="20"></td>
          </tr> 
				 
				  <tr>
					  <td><span class="fonts">ปีการศึกษา &nbsp;</td>
					  <td><input name="Txtcode_year" type="number" id="textfield" value=""></td>
				  </tr>
			        <tr>
            <td><span class="fonts">เบอร์โทร &nbsp;</td>
            <td><input name="Txtcode_phone" type="number" id="number" value=""></td>
          </tr>
          <tr>
					  <td><span class="fonts">สาขา &nbsp;</td>
					  <td><input name="Txtcode_major" type="textfield" id="textfield" value=""></td>
				  </tr>
			<tr>
		  		<td><span class="fonts">สถานะ </td>
		  		<td><input name="Txtcode_status" type="textfield" id="image_name" ></td>
		  	  </tr>


			     
			  </tbody>
			  </table>
					<br>
					</br>
					<tr>
					  <td colspan="3" align="center"><input id="btnOrange" type="submit" name="Submit" value="บันทึก"><input type="hidden" name="MM_insert" value="form1">&nbsp;&nbsp;&nbsp;&nbsp;
					    <input id="btnOrange" type="button" name="Reset" value="ยกเลิก" onclick=window.history.back() value=back></td>
					</tr>
			
			  </center>
			</form>			
	  </blockquote>
	  <br>
<br>
<br>
<br>
<?php
 include 'foot.php';
?>
