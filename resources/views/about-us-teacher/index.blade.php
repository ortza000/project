@extends('layouts_teacher.master2')

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
            <center><h2>ข้อมูลส่วนตัว อาจารย์</h2></center>
            <div class="row margin-bottom-60">



                <section class="team-wrapper">



                  <li> <h2 align="left" class="section-title">ประวัติ</h2>  </li>

                    <div class="row">
                        <div class="col-sm-8">

                            <?php foreach ($users as $row):?>

                            <p> <a>ชื่อ </a><?php echo $row->teh_name; ?></p>
                            <p> <a>เบอร์</a> <?php echo $row->teh_phone; ?></p>
                            <p> <a>คุณวุฒิ</a> <?php echo $row->teh_qualification; ?></p>
                            <p> <a>สถานะ</a> <?php echo $row->teh_email; ?></p>
                            <?php endforeach; ?>
                        </div>


                    </div>
                    <div class="row">
                    <div class="col-sm-8">
                        <h3 align="left" class="section-title">รายการที่ปรึกษาอบรม</h3>
                        <ul class="joblist-link">
                            <?php foreach ($user1 as $row):?>

                            <li   ><a href="{{url('detail-course/'.$row->course_id)}}"><?php echo $row->course_name; ?></a></li>
                            <?php endforeach; ?>
                        </ul>

<br><br>
                    </div>
                    <div class="col-sm-8">
                        <h3 align="left" class="section-title">รายการที่ปรึกษากิจกรรม</h3>
                        <ul class="joblist-link">
                            <?php foreach ($user2 as $row):?>

                            <li   ><a href="{{url('detail-event/'.$row->pro_id)}}"><?php echo $row->pro_name; ?></a></li>
                            <?php endforeach; ?>
                        </ul>


                    </div>
                </div>
                </section>
            </div><!-- /.row -->





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
