@extends('layouts_teacher.master2')

@section('css')

@endsection
@section('content')

<section class="page-header-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header">
                    <?php foreach ($users1 as $row):?>
                    <h1>รูปภาพ <?php echo $row->title; ?></h1>
                        <?php endforeach; ?>
                </div>
                <ol class="breadcrumb">

                </ol>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</section>

<div class="container">

    <div class="content-wrapper">

        <div class="inner-content">


            <div class="row four-column">
                <div id="grid">
                    <?php foreach ($users as $row):?>
                    <div class="portfolio-item col-sm-6 col-md-2" data-groups='["all", "letters", "red", "square"]'>
                        <div class="single-portfolio">
                            <img src="{{asset('image/'.$row->img)}}" alt="">
                            <div class="portfolio-links">
                                <a href="portfolio-single.html"><i class="fa fa-link"></i></a>
                            </div><!-- /.links -->
                        </div><!-- /.single-portfolio -->
                        <br>
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
