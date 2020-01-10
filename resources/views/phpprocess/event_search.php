<?php
 include 'head.php';
?>


				<section class="page-header-wrapper">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="page-header">
								  <h1>Blog</h1>
								</div>
								<br>
								<center>
								<tr>
     <form id="form1" name="form1" method="post" action='event_search.php'>
     <td> <label> <font color=“#FFFFFF”>&nbsp; รหัส &nbsp;</font></label>      </td>
     <td> <input type="text"   name="s_pro_id">  </td>
     <td> <label><font color=“#FFFFFF”> &nbsp;  ชื่อ   &nbsp;  </label></font>  </td>
     <td> &nbsp;<input type="text"   name="s_pro_name"> &nbsp;   </td>
     <td> &nbsp; <input   class="btn btn-primary" type="submit" name="btnSearch" value="ค้นหา"> &nbsp;  </td>
   
     </form>
      
 
</tr>
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


$record = mysqli_query($con , $sql) ;  

?>

                <?PHP   
  while ($result = mysqli_fetch_assoc($record)) { ?>  ?>
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
 include 'foot.php';
?>