<?php
 include 'head.php';
?>

 
				<section class="page-header-wrapper">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="page-header">
								  <h1>การจัดการข้อมูลโครงการเเละกิจกรรม</h1>
								</div>
								<br>
								<center>
								<table border="0">
							
								<tr>
		
     <form id="form1" name="form1" method="post" action='event_search.php'>
     <td> <label> <font color=“#FFFFFF”>&nbsp; รหัส &nbsp;</font></label>      </td>
     <td> <input type="text"   name="s_pro_id">  </td>
     <td> <label><font color=“#FFFFFF”> &nbsp;  ชื่อ   &nbsp;  </label></font>  </td>
     <td> &nbsp;<input type="text" id="word"    name="s_pro_name"> &nbsp;   </td>
     <td> &nbsp; <input   class="btn btn-primary" type="submit" name="btnSearch" value="ค้นหา"> &nbsp;  </td>
   
     </form>
	
	 <form id="form2" name="form2" method="add" action='event_add.php'>
	 <td> &nbsp; <input   class="btn btn-primary" type="submit" name="btnSearch" value="เพื่ม"> &nbsp;  </td>
     </form>
 
</tr>
</table>
							</div>
						</div><!-- /.row -->
					</div><!-- /.container-fluid -->
				</section>
		
				<?PHP


//$record = mysql_query($sql) ;  
//echo "<BR> ".$sql." <BR>" ;





if(isset($_POST["btnSearch"]))
{
  $q_pro_id=$_REQUEST["s_pro_id"];
  $q_pro_name=$_REQUEST["s_pro_name"];  
  
if ($q_pro_id == "")  $q_pro_id = "%" ;
  if ($q_pro_name == "")  $q_pro_name = "%" ;

$sql=" Select * "; 
  $sql=$sql." FROM projectandevent  ";
  $sql=$sql." where pro_id   like  "."\"".$q_pro_id."\" "; 
  $sql=$sql." and  pro_name  like  "."\"".$q_pro_name."\"  "  ; 
  $sql=$sql." order by pro_id ";
}

$perpage = 5;
 if (isset($_GET['page'])) {
 $page = $_GET['page'];
 } else {
 $page = 1;
 }
 
 $start = ($page - 1) * $perpage;
 
 $sql = "select * from projectandevent limit {$start} , {$perpage} ";

 $query = mysqli_query($con, $sql);

?>


                <?PHP   
  while ($result = mysqli_fetch_assoc($query)) { ?>  ?>
				<div class="container">
					<div class="content-wrapper">
						<div class="inner-content">
							<div class="row">
								<div class="col-xs-12 col-sm-8 col-md-9">
									<article class="blog-post-wrapper sticky">
										<header class="entry-header">
											<div class="entry-meta">
									            <ul class="list-inline">
									                <li><span class="the-time"><a href="#"> <?PHP echo $result['pro_id']; ?></a></span></li>
													
						         				</ul>
											</div><!-- /.entry-meta -->

											<h2 class="entry-title"><a href="blog-single.html"> <?PHP echo $result['pro_name']; ?></a></h2>
										</header><!-- /.entry-header -->
										<div class="entry-content">
											<p><?PHP echo $result['pro_des']; ?></p>
									    </div><!-- /.entry-content -->
										<div class="post-thumbnail">
											<img src="img/blog/blog-1.jpg" class="img-responsive " alt="">
										</div><!-- /.post-thumbnail -->
										<footer class="entry-footer"> 
											<a href="blog-single.html" class="btn btn-primary"> Read More</a>
										</footer><!-- /.entry-footer -->
									</article>
                                   
                                    
									

									<!-- pagination-wrap -->
								
									<!-- end pagination-wrap -->
								</div><!-- /.col-md-9 -->
                              
								<div class="col-xs-12 col-sm-4 col-md-3">
									<div class="sidebar-wrapper">
								    
									       
											
										</form>


									   

<br>
<br>
<br>
<br>
<br>
<br>

									    <aside class="widget widget_archive">
											<h2 class="widget-title">List Archived</h2>
								            <ul>
												<li><a href="#">August 2014</a>&nbsp;(3)</li>
												<li><a href="#">January 2014</a>&nbsp;(1)</li>
												<li><a href="#">March 2012 </a>&nbsp;(5)</li>
												<li><a href="#">January 2012</a>&nbsp;(3)</li>
												<li><a href="#">March 2011</a>&nbsp;(2)</li>
												<li><a href="#">October 2010 </a>&nbsp;(2)</li>
								            </ul>
									    </aside>

                                      
								    </div><!-- /.sidebar-wrapper -->
								</div><!-- /.col-md-3 -->
							</div><!-- /.row -->
						</div><!-- /.inner-content -->
                    </div><!-- /.content-wrapper -->
                   
				</div><!-- /.container -->
                <?PHP } ?>
                <?php
 $sql2 = "select * from projectandevent ";
 $query2 = mysqli_query($con, $sql2);
 $total_record = mysqli_num_rows($query2);
 $total_page = ceil($total_record / $perpage);
 ?>
                	<nav class="pagination-wrap text-center">
										<ul class="pagination">
											<li class="disabled"><a title="Previous"><i class="flaticon-arrowhead4"></i></a></li>
                                            <li>
                                                            <a href="event.php?page=1" aria-label="Previous">
                                                            <span aria-hidden="true">&laquo;</span>
                                                            </a>
                                             </li><?php for($i=1;$i<=$total_page;$i++){ ?>
                                                    <li><a href="event.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                                                                    <?php } ?>
                                                         <li>
											
                                                         <li>
                                                            <a href="event.php?page=<?php echo $total_page;?>" aria-label="Next">
                                                            <span aria-hidden="true">&raquo;</span>
                                                         </a>
                                                         </li>
											
											<li><a title="Next" href="#"><i class="flaticon-arrow437"></i></a></li>
										</ul>
										
                                    </nav>
                          
                <?php
 include 'foot.php';
?>