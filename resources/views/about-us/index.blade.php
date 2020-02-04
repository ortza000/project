@extends('layouts2.master2')

@section('css')
{{-- <!-- REVOLUTION BANNER CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="{{asset('rs-plugin/css/settings.css')}}" media="screen" />
<!-- Bootstrap Core CSS -->
<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet"> --}}
@endsection

@section('content')

<section class="page-header-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header">
                    <h1>About Us</h1>
                </div>
                <ol class="breadcrumb">
                    <li><a href="home">Home</a></li>
                    <li><a href="{{ route('about-us.index') }}">About</a></li>
                    <li class="active">About Us</li>
                </ol>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</section>


<div class="container">
    <div class="content-wrapper">
        <section class="about-us-wrapper">
            <center><h2>ข้อมูลส่วนตัว</h2></center>
            <div class="row margin-bottom-60">


                    <?php
                    foreach ($users as $user) {

                        $std_name      = $user->std_name;
                        $std_card    = $user->std_card;
                        $std_year    = $user->std_year;
                        $std_phone    = $user->std_phone;
                        $std_major    = $user->std_major;
                        $std_status    = $user->std_status;
                        $pro_id    = $user->pro_id;
                        $pro_name    = $user->pro_name;
                ?>

                <?php } ?>
                <section class="team-wrapper">



                   <h2 align="left" class="section-title">ประวัติ</h2>

                    <div class="row">
                        <div class="col-sm-8">

                            <p> <a>ชื่อ </a><?php echo $std_name; ?></p>
                            <p> <a>รหัสนิสิต</a> <?php echo $std_card; ?> <a>ปีการศึกษา</a> <?php echo $std_year; ?></p>
                            <p> <a>เบอร์</a> <?php echo $std_phone; ?> <a>สาขา</a> <?php echo $std_major; ?></p>
                            <p> <a>สถานะ</a> <?php echo $std_status; ?></p>
                        </div>

                        <div class="col-sm-4">
                            <h3 align="left" class="section-title">รายการการลงทะเบียกิจกรรม</h3>
                            <ul class="joblist-link">

                                <?php foreach ($users as $row):?>

                                <li   ><a href="job-page.html"><?php echo $row->pro_name; ?></a></li>
                                <?php endforeach; ?>
                            </ul>

                            <a class="btn btn-primary joblist-btn" href="#">View all jobs <i  style=""
                                    class="fa fa-angle-right "></i> </a>

                        </div>
                    </div>
                </section>
            </div><!-- /.row -->




        <section class="download-box-wrapper">
            <div class="download-box">
                <ul class="list-inline">
                    <li><a href="#">Company Profile <span>Download</span></a></li>
                    <li><a href="#">Annual Report <span>Download</span></a></li>
                    <li><a href="#">Corporate Brochure <span>Download</span></a></li>
                </ul>
            </div>
        </section>
    </div><!-- /.content-wrapper -->
</div><!-- /.container -->

@endsection

@section('js')
<script>
    $(document).ready(function () {
        document.getElementById('index1').classList.add('active');

    });
</script>

@endsection
