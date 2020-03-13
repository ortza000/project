@extends('layouts_teacher.master2')

@section('css')

@endsection
@section('content')

<section class="page-header-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header">
                    <h1>ข่าวประชาสัมพันธ์</h1>
                </div>
                <ol class="breadcrumb">
                    <li><a href="home">Home</a></li>
                    <li><a href="{{ route('Newcourse') }}">Portfolio</a></li>
                    <li class="active">Portfolio Four Column</li>
                </ol>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</section>

<div class="container">

    <div class="content-wrapper">

        <div class="inner-content">
            <li><a  class="btn btn-primary" href="{{ route('Newcourse') }}">ข่าวอบรม</a></li>
            <li><a  class="btn btn-primary" href="{{ route('Newevent') }}">ข่าวกิจกรรม</a></li>
            <br><br><br>

            <div class="row four-column">
                <div id="grid">
                    <?php foreach ($users as $row):?>
                    <div class="portfolio-item col-sm-6 col-md-3" data-groups='["all", "letters", "red", "square"]'>
                        <div class="single-portfolio">
                            <img src="img/work/portfolio-12.jpg" alt="">
                            <div class="portfolio-links">
                                <a href="portfolio-single.html"><i class="fa fa-link"></i></a>
                            </div><!-- /.links -->
                        </div><!-- /.single-portfolio -->
                        <br>
                        <h4><a href="portfolio-single.html"><?php echo $row->title; ?></a></h4>
                    </div><!-- /.portfolio-item -->
                    <?php endforeach; ?>
                </div><!-- /#grid -->
            </div><!-- /.row -->
        </div><!-- /.inner-content -->
    </div><!-- /.content-wrapper -->
</div><!-- /.container -->

@endsection

@section('js')
<script>
    $(document).ready(function () {
        document.getElementById('index4').classList.add('active');
    });
</script>

@endsection
