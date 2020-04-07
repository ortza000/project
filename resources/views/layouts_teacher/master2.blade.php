<!DOCTYPE html>
<html lang="en" class="no-.js')}}">

	<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Primex</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Web Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,900,700,500,300' rel='stylesheet' type='text/css'>
    <!-- Flaticon CSS -->
    <link href="{{asset('fonts/flaticon/flaticon.css')}}" rel="stylesheet">
    <!-- font-awesome CSS -->
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- owl.carousel CSS -->
    <link href="{{asset('owl-carousel/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('owl-carousel/owl.theme.css')}}" rel="stylesheet">
    <!-- Offcanvas CSS -->
    <link href="{{asset('css/hippo-off-canvas.css')}}" rel="stylesheet">
    <!-- animate CSS -->
    <link href="{{asset('css/animate.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <!-- Responsive CSS -->
    <link href="{{asset('css/responsive.css')}}" rel="stylesheet">

    @yield('css')

    <script src="{{asset('js/vendor/modernizr-2.8.1.min.js')}}"></script>
    <!-- HTML5 Shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
	    <script src="{{asset('js/vendor/html5shim.js')}}"></script>
	    <script src="{{asset('js/vendor/respond.min.js')}}"></script>
    <![endif]-->

	</head>


	<body>
	  <div id="st-container" class="st-container">
	    <div class="st-pusher">
	      <div class="st-content">
	        <div class="st-content-inner">
			    <header>
					<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
						<div class="container">
							<div class="navbar-header">
				                <button type="button" class="navbar-toggle collapsed" >
				                  <span class="sr-only">Toggle navigation</span>
				                  <span class="icon-bar"></span>
				                  <span class="icon-bar"></span>
				                  <span class="icon-bar"></span>
				                </button>
							  <!-- offcanvas-trigger-effects -->
                                <h1 class="logo"><a class="navbar-brand" href="home"><img src="{{asset('img/logobuu2.png')}}" alt=""></a></h1>

							</div>

							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse navbar-collapse">
								<ul class="nav navbar-nav navbar-right">
									<li id="master"><a href="home3">Home</a></li>

									<li id="index1">
                                        {{-- <a href="{{ route('about-us-teacher.index') }}" >About Us<b class="caret"></b> </a> --}}
										{{-- <!-- submenu-wrapper -->
										<div class="submenu-wrapper submenu-wrapper-topbottom">
											<div class="submenu-inner  submenu-inner-topbottom">
												<ul class="dropdown-menu">
													<li><a href="about-us.html">About Us</a></li>
													<li><a href="about-me.html">About Me</a></li>
												</ul>
											</div><!-- /.submenu-inner -->
										</div> <!-- /.submenu-wrapper --> --}}
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                           การจัดการกิจกรรมเเละอบรม <span class="caret"></span>
                                        </a>
                                    <div class="submenu-wrapper submenu-wrapper-topbottom">
                                        <div class="submenu-inner  submenu-inner-topbottom">
                                            <ul class="dropdown-menu">
                                                <li id="index2"><a href="{{ route('clients-page-teacher') }}">การจัดการลงทะเบียน</a></li>
                                                <li id="index6"><a href="{{ route('course-teacher.index') }}">การจัดการลงอบรม</a></li>
                                            </ul>
                                        </div><!-- /.submenu-inner -->
                                    </div> <!-- /.submenu-wrapper -->
                                    </li>


                                    <li id="index5"><a href="{{ route('New-teacher.index') }}" >{{ __('ข่าวประชาสัมพันธ์') }}{{-- <b class="caret"></b> --}} </a>
										{{-- <!-- submenu-wrapper -->
										<div class="submenu-wrapper submenu-wrapper-topbottom">
											<div class="submenu-inner  submenu-inner-topbottom">
												<ul class="dropdown-menu">
													<li><a href="job-page.html">Job Page</a></li>
													<li><a href="clients-page.html">Clients Page</a></li>
													<li><a href="faq.html">FAQ Page</a></li>
													<li><a href="typography.html">Typography</a></li>
												</ul>
											</div><!-- /.submenu-inner -->
										</div> <!-- /.submenu-wrapper --> --}}
									</li>
									@guest
                                        <li >
                                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                        </li>
                                        @if (Route::has('register'))
                                            <li >
                                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                            </li>
                                        @endif
                                    @else
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }} <span class="caret"></span>
                                        </a>
                                    <div class="submenu-wrapper submenu-wrapper-topbottom">
                                        <div class="submenu-inner  submenu-inner-topbottom">
                                            <ul class="dropdown-menu">
                                                <li><a href="{{ route('about-us-teacher') }}">ข้อมูลส่วนตัว</a></li>
                                                <li id="index3"><a href="{{ route('faq-teacher.index') }}">รายวิชา</a></li>
                                                <li id="index4"><a href="{{ route('fullcalendar1.index') }}">ปฏิทินนัดหมาย</a></li>
                                                <li id="index4"><a href="{{ route('image-upload') }}">อัพโหลดรูปข่าว</a></li>
                                                <li id="index4"><a href="{{ route('fileupload.index') }}">อัพโหลดเอกสาร</a></li>
                                                <li id="index4"><a href="{{ route('file-teacher.index') }}">ดาวโหลดเอกสาร</a></li>

                                                <li>
                                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                                  document.getElementById('logout-form').submit();">
                                                     {{ __('Logout') }}
                                                 </a>
                                                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                                </li>

                                            </ul>
                                        </div><!-- /.submenu-inner -->
                                    </div> <!-- /.submenu-wrapper -->

                                    </li>
                                    @endguest
                                </ul>
                        </div><!-- /.navbar-collapse -->
						</div><!-- /.container -->
					</nav>
				</header>

                @yield('content')




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
	    <script src="{{asset('js/jquery.js')}}"></script>
	    <!-- Bootstrap Core JavaScript -->
	    <script src="{{asset('js/bootstrap.min.js')}}"></script>
	    <!-- wow.min.js -->
	    <script src="{{asset('js/wow.min.js')}}"></script>
	    <!-- owl-carousel -->
	    <script src="{{asset('owl-carousel/owl.carousel.min.js')}}"></script>
	    <!-- smoothscroll -->
	    <script src="{{asset('js/smoothscroll.js')}}"></script>
		<!-- Offcanvas Menu -->
		<script src="{{asset('js/hippo-offcanvas.js')}}"></script>
		<!-- easypiechart -->
		<script src="{{asset('js/jquery.easypiechart.min.js')}}"></script>
	    <!-- Scrolling Nav JavaScript -->
	    <script src="{{asset('js/jquery.easing.min.js')}}"></script>
		<!-- Magnific-popup -->
		<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
		<!-- Shuffle.min js -->
		<script src="{{asset('js/jquery.shuffle.min.js')}}"></script>
	    <!-- Custom Script -->
        <script src="{{asset('js/scripts.js')}}"></script>

        @yield('js')

	</body>
</html>
