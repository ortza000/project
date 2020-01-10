<?php
 include 'head.php';
?>
	<section class="page-header-wrapper">

                <div id="x-corp-carousel" class="carousel slide hero-slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#x-corp-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#x-corp-carousel" data-slide-to="1"></li>
                    </ol>


                  <br>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="img/buufix.jpg" alt="Hero Slide">
                            <!--Slide Image-->

                            <div class="container">
                                <div class="carousel-caption">

                                </div>
                                <!--.carousel-caption-->
                            </div>
                            <!--.container-->
                        </div>
                        <!--.item-->

                        <div class="item">
                            <img src="img/buufix4.jpg" alt="Hero Slide">
                            <!--Slide Image-->

                            <div class="container">
                                <div class="carousel-caption">

                                </div>
                                <!--.carousel-caption-->
                            </div>
                            <!--.container-->
                        </div>
                        <!--.item-->

                    </div>
                    <!--.carousel-inner-->

                    <!-- Controls -->
                    <a class="left carousel-control" href="#x-corp-carousel" role="button" data-slide="prev">
                        <i class="fa fa-angle-left" aria-hidden="true"></i>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#x-corp-carousel" role="button" data-slide="next">
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <!-- #x-corp-carousel-->
	</section>

				<div class="container">
					<div class="content-wrapper">
						<section class="intro-wrapper">
							<div class="row">
								<div class="col-lg-6 col-md-8">
									<h2 class="wow fadeInDown">ยินดีต้อนรับสู่เว็บสาขาเทคโนโลยีสารสนเทศ</h2>
								<h3 class="wow fadeInDown">ชื่อหลักสูตร</h3>
                  <p class="wow fadeInDown">หลักสูตรวิทยาศาสตรบัณฑิต สาขาวิชาเทคโนโลยีสารสนเทศ  </p>

									<h3 class="wow fadeInDown">ปรัชญา</h3>
									<p class="wow fadeInDown">ผลิตบัณฑิตในสาขาวิชาเทคโนโลยีสารสนเทศให้มีความรู้และเชี่ยวชาญทั้งภาคทฤษฎีและภาคปฏิบัติ สามารถประยุกต์ให้เกิดประโยชน์ต่อองค์กร สังคม และประเทศชาติอย่างมีประสิทธิภาพ มีความรับผิดชอบและมีคุณธรรม</p>

									<h3 class="wow fadeInDown">คุณสมบัติผู้เข้าศึกษา</h3>
									<p class="wow fadeInDown">สำเร็จการศึกษาระดับมัธยมศึกษาตอนปลายหรือเทียบเท่า โปรแกรมที่เน้นคณิตศาสตร์ โดยผ่านการคัดเลือกตามเกณฑ์และ/หรือ เป็นไปตามประกาศของมหาวิทยาลัย</p>

									<a class="btn btn-primary wow fadeInDown" href="#" role="button">Read More</a>
								</div>

								<div class="col-lg-6 col-md-4"></div>
							</div><!-- /.row -->
						</section><!-- /.intro-wrapper -->

            <?PHP

      $perpage = 4;
      if (isset($_GET['page'])) {
      $page = $_GET['page'];
      } else {
      $page = 1;
      }

      $start = ($page - 1) * $perpage;

      $sql = "select * from course limit {$start} , {$perpage} ";

      $query = mysqli_query($con, $sql);

      ?>

						<section class="service-wrapper">
							<h2 class="section-title wow fadeInDown">ข่าวประชาสัมพันธ์</h2>
				            <div class="row">
                      <?PHP
                while ($result = mysqli_fetch_assoc($query)) { ?>
				              <div class="col-md-6 wow fadeInRight">
				                <div class="media">
				                  <a class="media-left" href="#">
				                    <span  class="icon bg1 flaticon-increasing5"></span>
				                  </a>
				                  <div class="media-body">
				                    <h3 class="media-heading"><a href="#"> <?PHP echo $result['course_id']; ?></a></h3>
				                     <h3 class="media-heading"><a href="#"> <?PHP echo $result['course_name']; ?></a></h3>
                              <a href="register_coruse.php?course_id=<?PHP echo $result['course_id']; ?>"><input type="submit" method="get" value="อ่านข่าวนี้" class="btn btn-primary"></a>
				                  </div> <!-- /.media-body -->
				                </div> <!-- /.media -->
				              </div> <!-- /.col-md-6 -->

   <?PHP } ?>


						</section>
            <?php
$sql2 = "select * from course ";
$query2 = mysqli_query($con, $sql2);
$total_record = mysqli_num_rows($query2);
$total_page = ceil($total_record / $perpage);
?>
	<section class="service-wrapper">
              <nav class="pagination-wrap text-center">
                <ul class="pagination">
                  <li class="disabled"><a title="Previous"><i class="flaticon-arrowhead4"></i></a></li>
                                        <li>
                                                        <a href="index.php?page=1" aria-label="Previous">
                                                        <span aria-hidden="true">&laquo;</span>
                                                        </a>
                                         </li><?php for($i=1;$i<=$total_page;$i++){ ?>
                                                <li><a href="index.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                                                                <?php } ?>
                                                     <li>

                                                     <li>
                                                        <a href="index.php?page=<?php echo $total_page;?>" aria-label="Next">
                                                        <span aria-hidden="true">&raquo;</span>
                                                     </a>
                                                     </li>

                  <li><a title="Next" href="#"><i class="flaticon-arrow437"></i></a></li>
                </ul>

                                </nav>
	</section>

				





						</section>
					</div><!-- /.content-wrapper -->
				</div><!-- /.container -->


				<section class="footer-widget-wrapper">
					<div class="container">
						<div class="row">
							<div class="col-md-6 col-sm-12">
								<div class="footer-widget">
									<p class="subcsribe-text wow fadeInDown">Quickly utilize installed base channels before premier expertise. Conveniently extend web-enabled niche markets without 2.0 e-markets. Collaboratively incentivize .</p>

									<h3 class="wow fadeInDown">Subscribe to newsletter</h3>

									<form class="wow fadeInDown">
									  <div class="form-group">
									    <label class="sr-only" for="exampleInputEmail1">Email address</label>
									    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
									  </div>
									  <button type="submit" class="btn btn-primary">Subscribe</button>
									</form>

									<div class="social-link wow fadeInDown">
										<ul>
											<li><a href="#"><i class="fa fa-rss"></i></a></li>
											<li><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
											<li><a href="#"><i class="fa fa-youtube"></i></a></li>
											<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
											<li><a href="#"><i class="fa fa-flickr"></i></a></li>
										</ul>
									</div>
								</div><!-- /.footer-widget -->
							</div><!-- /.col-md-6 -->
							<div class="col-md-2 col-sm-4 col-xs-4">
								<div class="footer-widget">
									<h3 class="wow fadeInDown">Customer Care</h3>
									<ul class="wow fadeInDown">
										<li><a href="#">Customer Support</a></li>
										<li><a href="#">Platinum Support</a></li>
										<li><a href="#">Gold Support</a></li>
										<li><a href="#">Standard Support</a></li>
										<li><a href="#">Training</a></li>
										<li><a href="#">Online Training</a></li>
										<li><a href="#">Custom Training</a></li>
									</ul>
								</div><!-- /.footer-widget -->
							</div><!-- /.col-md-2 -->
							<div class="col-md-2 col-sm-4 col-xs-4">
								<div class="footer-widget">
									<h3 class="wow fadeInDown">Information</h3>
									<ul class="wow fadeInDown">
										<li><a href="#">Press</a></li>
										<li><a href="#">Articles</a></li>
										<li><a href="#">Reviews</a></li>
										<li><a href="#">Testimonials</a></li>
										<li><a href="#">Awards</a></li>
										<li><a href="#">Video Clips</a></li>
										<li><a href="#">Blog</a></li>
									</ul>
								</div><!-- /.footer-widget -->
							</div><!-- /.col-md-2 -->
							<div class="col-md-2 col-sm-4 col-xs-4">
								<div class="footer-widget">
									<h3 class="wow fadeInDown">Solutions</h3>
									<ul class="wow fadeInDown">
										<li><a href="#">Contact Center</a></li>
										<li><a href="#">Knowledge</a></li>
										<li><a href="#">Management</a></li>
										<li><a href="#">Web Self-Service</a></li>
										<li><a href="#">Performance Metrics</a></li>
									</ul>
								</div><!-- /.footer-widget -->
							</div><!-- /.col-md-2 -->
						</div><!-- /.row -->
					</div><!-- /.container -->
				</section>


				<footer class="footer-wrapper">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="copyright wow fadeInDown">
									<p>Copyright &copy; 2016 primex . All Rights Reserved. Designed by <a href="http://www.uicookies.com/">uicookies.com</a> </p>
								</div><!-- /.copyright -->
							</div><!-- /.col-md-12 -->
						</div><!-- /.row -->
					</div><!-- /.container -->
				</footer>
	        </div> <!-- .st-content-inner -->
	       </div> <!-- .st-content -->
	    </div> <!-- .st-pusher -->


		<!-- ======== OFFCANVAS MENU ========= -->
	    <div class="offcanvas-menu offcanvas-effect visible-xs">
	      <button type="button" class="close" aria-hidden="true" data-toggle="offcanvas" id="off-canvas-close-btn">&times;</button>
	      <h3>Sidebar Menu</h3>
	      	<div>
		      <div>
				<ul>
					<li><a href="#">Home</a>
						<ul>
							<li class="active"><a href="index.html"><i class="fa fa-home"></i> Home Style One</a></li>
						</ul>
					</li>

					<li><a href="#">About</a>
						<ul>
							<li><a href="about-us.html"><i class="fa fa-life-ring"></i> About Us</a></li>
							<li><a href="about-me.html"><i class="fa fa-user"></i> About me</a></li>
						</ul>
					</li>

					<li><a href="#">Blog</a>
						<ul>
							<li><a href="blog.html"><i class="fa fa-pencil-square-o"></i> Standard Blog</a></li>
							<li><a href="blog-single.html"><i class="fa fa-pencil"></i> Single Article</a></li>
						</ul>
					</li>

					<li><a href="#">Portfolio</a>
						<ul>
							<li><a href="portfolio-four.html"><i class="fa fa-picture-o"></i> Four Column</a></li>
							<li><a href="portfolio-three.html"><i class="fa fa-paper-plane-o"></i> Three Column</a></li>
							<li><a href="portfolio-two.html"><i class="fa fa-magic"></i> Two Column</a></li>
						</ul>
					</li>


					<li><a href="#">Pages</a>
						<ul>
							<li><a href="job-page.html"><i class="fa fa-briefcase"></i> Job Page</a></li>
							<li><a href="clients-page.html"><i class="fa fa-coffee"></i> Clients Page</a></li>
							<li><a href="faq.html"><i class="fa fa-question-circle"></i> FAQ Page</a></li>
							<li><a href="typography.html"><i class="fa fa-puzzle-piece"></i> Typography Page</a></li>
						</ul>
					</li>


					<li><a href="#">Contact</a>
						<ul>
							<li><a href="contact.html"><i class="fa fa-envelope-o"></i> Contact</a></li>
						</ul>
					</li>
				</ul>
			  </div>
			</div>
	    </div><!-- .offcanvas-menu -->
	  </div><!-- /st-container -->


		<!-- Preloader -->
		<div id="preloader">
			<div id="status">
				<div class="status-mes"></div>
			</div>
		</div>



	    <!-- jQuery -->
	    <script src="js/jquery.js"></script>
	    <!-- Bootstrap Core JavaScript -->
	    <script src="js/bootstrap.min.js"></script>
	    <!-- wow.min.js -->
	    <script src="js/wow.min.js"></script>
	    <!-- owl-carousel -->
	    <script src="owl-carousel/owl.carousel.min.js"></script>
	    <!-- smoothscroll -->
	    <script src="js/smoothscroll.js"></script>
		<!-- Offcanvas Menu -->
		<script src="js/hippo-offcanvas.js"></script>
		<!-- easypiechart -->
		<script src="js/jquery.easypiechart.min.js"></script>
	    <!-- Scrolling Nav JavaScript -->
	    <script src="js/jquery.easing.min.js"></script>
		<!-- Magnific-popup -->
		<script src="js/jquery.magnific-popup.min.js"></script>
		<!-- Shuffle.min js -->
		<script src="js/jquery.shuffle.min.js"></script>
	    <!-- Custom Script -->
	    <script src="js/scripts.js"></script>
	</body>
</html>
