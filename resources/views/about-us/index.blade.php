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
                    <li><a href="{{ route('about-us') }}">About</a></li>
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

                <section class="team-wrapper">



                   <h2 align="left" class="section-title">ประวัติ</h2>

                    <div class="row">
                        <div class="col-sm-8">
                            <?php foreach ($user3 as $row):?>
                            <p> <a>ชื่อ </a><?php echo $row->std_name; ?></p>
                            <p> <a>รหัสนิสิต </a><?php echo $row->std_card; ?></p>
                            <p> <a>ปีการศึกษา </a><?php echo $row->std_year; ?></p>
                            <p> <a>เบอร์ </a><?php echo $row->std_phone; ?></p>
                            <p> <a>สาขา </a><?php echo $row->std_major; ?></p>
                            <p> <a>สถานะ </a><?php echo $row->std_status; ?></p>

                            <?php endforeach; ?>


                            <h3 align="left" class="section-title">รายการสำเร็จการเข้าร่วมอบรม</h3>
                            <ul class="joblist-link">

                                <?php foreach ($user4 as $row):?>

                                <li   ><a href="{{url('pdf-course/'.$row->course_id)}}"><?php echo $row->course_name; ?></a></li>
                                <?php endforeach; ?>
                            </ul>

                        </div>

                        <div class="col-sm-4">
                            <h3 align="left" class="section-title">รายการการลงทะเบียนอบรม</h3>
                            <ul class="joblist-link">

                                <?php foreach ($user1 as $row):?>

                                <li   ><a><?php echo $row->course_name; ?></a></li>
                                <?php endforeach; ?>
                            </ul>


                                <br>
                                <br>
                            <h3 align="left" class="section-title">รายการการลงทะเบียนกิจกรรม</h3>
                            <ul class="joblist-link">

                                <?php foreach ($user2 as $row):?>

                                <li   ><a><?php echo $row->pro_name; ?></a></li>
                                <?php endforeach; ?>
                            </ul>




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
