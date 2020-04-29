@extends('layouts2.master2')

@section('css')

@endsection

@section('content')

<section class="page-header-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header">
                    <?php foreach ($users1 as $row):?>
                    <h1>รายละเอียดข่าว หัวข้อ<?php echo $row->title; ?> </h1>

                    <?php endforeach; ?>
                </div>
                <ol class="breadcrumb">
                    <li><a href="home">Home</a></li>
                    <li><a href="{{ route('clients-page.index') }}">Pages</a></li>
                    <li class="active">กิจกรรมและโครงการ</li>
                </ol>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</section>


<div class="container">

    <div class="content-wrapper">
        <div class="container">
            <div class="col-md-3 wow fadeInRight">
                <div class="media">
            <?php foreach ($users as $row):?>
            <div class="single-portfolio">

                <h2>รายละเอียดข่าว</h2>
                <img  src="{{asset('image/'.$row->img)}}"  alt="">
                <div class="portfolio-links">
                    <a href="portfolio-single.html"><i class="fa fa-link"></i></a>
                </div><!-- /.links -->
            </div><!-- /.single-portfolio -->



                                <br>
                                <p> <a>หัวข้อข่าว </a><?php echo $row->title; ?></p>
                                <p> <a>รายละเอียดข่าว</a> <?php echo $row->description; ?></p>
                                <p> <a>วันที่เริ่ม</a> <?php echo $row->start; ?></p>
                                <p> <a>วันที่สิ้นสุด</a> <?php echo $row->end; ?></p>

                            <?php endforeach; ?>

                        </div> <!-- /.media -->
                        </div> <!-- /.col-md-6 -->

        </div><!-- /.container -->

        </div><!-- /.our-clients-wrapper -->

    </div><!-- /.content-wrapper -->
</div><!-- /.container -->


@endsection

@section('js')
<script>
    $(document).ready(function () {
        document.getElementById('index2').classList.add('active');

    });
</script>

@endsection
