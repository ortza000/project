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
                    <h1>เอกสาร กิจกรรมและอบรม</h1>
                </div>
                <ol class="breadcrumb">
                    <li><a href="home">Home</a></li>
                    <li><a href="">About</a></li>
                    <li class="active">About Us</li>
                </ol>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</section>


<div class="container">
    <div class="content-wrapper">
        <section class="about-us-wrapper">
            <center><h2>เอกสาร กิจกรรมและอบรม</h2></center>
            <div class="row margin-bottom-60">



                <section class="team-wrapper">




                    <div class="row">
                    <div class="col-sm-5">
                        <h3 align="left" class="section-title">เอกสาร อบรม เทอม 1</h3>
                        <ul class="joblist-link">
                            <?php foreach ($users as $row):?>

                            <li><a href="{{url('file-course/'.$row->id)}}"><?php echo $row->title; ?></a></li>
                            <?php endforeach; ?>
                        </ul>

                        <h3 align="left" class="section-title">เอกสาร อบรม เทอม 2</h3>
                        <ul class="joblist-link">
                            <?php foreach ($users1 as $row):?>
                            <li><a href="{{url('file-course/'.$row->id)}}"><?php echo $row->title; ?></a></li>
                            <?php endforeach; ?>
                        </ul>

                    </div>

                    <div class="col-sm-5">
                        <h3 align="left" class="section-title">เอกสาร กิจกรรม เทอม 1</h3>
                        <ul class="joblist-link">
                            <?php foreach ($users2 as $row):?>

                            <li><a href="{{url('file-course/'.$row->id)}}"><?php echo $row->title; ?></a></li>
                            <?php endforeach; ?>
                        </ul>

                        <h3 align="left" class="section-title">เอกสาร กิจกรรม เทอม 2</h3>
                        <ul class="joblist-link">
                            <?php foreach ($users3 as $row):?>
                            <li><a href="{{url('file-course/'.$row->id)}}"><?php echo $row->title; ?></a></li>
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
