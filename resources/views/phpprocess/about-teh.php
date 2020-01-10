<?php
 include 'head.php';
?>

				<section class="page-header-wrapper">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="page-header">
								  <h1>About Teacher</h1>
								</div>
								<ol class="breadcrumb">
								  <li><a href="index.php">Home</a></li>

								</ol>
							</div>
						</div><!-- /.row -->
					</div><!-- /.container-fluid -->
                </section>

				<div class="container">
					<div class="content-wrapper">
						<section class="about-us-wrapper">
							<div class="row margin-bottom-60">
								<div class="col-md-8">
                                    <h2>การจัดการข้อมูล</h2>
                                    <center>

                                    <table border="0">
<tr>
<td colspan="7" align="center">  <H3> การจัดการข้อมูลอาจารย์</H3>  </td>
</tr>
<tr>
     <form id="form1" name="form1" method="post" action='about-teh.php'>
     <td> <label> &nbsp; รหัส &nbsp;</label>      </td>
     <td> <input type="text"   name="s_pro_id">  </td>
     <td> <label> &nbsp;  ชื่อ   &nbsp;  </label> </td>
     <td> &nbsp;<input type="text"   name="s_pro_name"> &nbsp;   </td>
     <td> &nbsp; <input type="submit" name="btnSearch" value="ค้นหา"> &nbsp;  </td>

     </form>

   <form id="form2" name="form2" method="add" action="teacher_add.php">
     <td> &nbsp; <input type="submit" name="btnAdd" value="เพิ่มข้อมูลอาจารย์"> &nbsp;  </td>
     </form>
</tr>
</table>
<br>
<br>
                <?PHP

  if(isset($_POST["btnSearch"]))
  {
    $q_pro_id=$_REQUEST["s_pro_id"];
    $q_pro_name=$_REQUEST["s_pro_name"];

  if ($q_pro_id == "")  $q_pro_id = "%" ;
    if ($q_pro_name == "")  $q_pro_name = "%" ;

  $sql=" Select * ";
    $sql=$sql." FROM teacher  ";
    $sql=$sql." where teh_id   like  "."\"".$q_pro_id."\" ";
    $sql=$sql." and  teh_name  like  "."\"".$q_pro_name."\"  "  ;
    $sql=$sql." order by teh_id ";
  }
  else
  {
    $sql=" Select * ";
    $sql=$sql." FROM teacher  ";
    $sql=$sql."  order by teh_id ";
  }

  //$record = mysql_query($sql) ;
  //echo "<BR> ".$sql." <BR>" ;

$record = mysqli_query($con , $sql) ;
 ?>


                                    <table border="1" align="center">
<tr bgcolor="ffcc00">
    <td align="center"> <br>&nbsp; รหัส &nbsp;</td>
    <td align="center"> &nbsp; ชื่ออาจารย์  &nbsp; </td>
    <td align="center"> <br>&nbsp; เบอร์โทร &nbsp; </td>
    <td align="center"> &nbsp; คุณวุฒิ &nbsp;</td>
    <td align="center"> &nbsp; Email  &nbsp; </td>



<?PHP
  while( $data = mysqli_fetch_assoc($record) ) {   ?>
 <tr>

    <td align="center"> &nbsp; <?PHP echo $data['teh_id']; ?> &nbsp; </td>
    <td align="center"> &nbsp; <?PHP echo $data['teh_name']; ?> &nbsp; </td>
    <td align="center"> &nbsp; <?PHP echo $data['teh_phone']; ?> &nbsp; </td>
    <td align="center"> &nbsp; <?PHP echo $data['teh_qualification']; ?> &nbsp; </td>

    <td align="center"> &nbsp; <?PHP echo $data['teh_email']; ?> &nbsp; </td>







  </tr>




  </tr>
  <?PHP } ?>
</table>
<br>
<br>

<form id="form2" name="form2" method="add" action="index.php">   
     <td> &nbsp; <input type="submit" name="btnAdd" value="ย้อนกลับไปหน้าเดิม"> &nbsp;  </td>
     </form>

								</div><!-- /.col-md-8 -->





										</div>
									</div>
								</div><!-- /.col-md-4 -->
							</div><!-- /.row -->
						</section><!-- /.about-us-wrapper -->
					</div><!-- /.content-wrapper -->
				</div><!-- /.container -->

                <?php
 include 'foot.php';
?>
