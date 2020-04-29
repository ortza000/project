@extends('layouts_teacher.master2')

@section('css')

@endsection
@section('content')

<section class="page-header-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header">

                    <h1>หัวข้อข่าว</h1>
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
            <?php foreach ($users as $row):?>
            <h1>รายละเอียดข่าว</h1>

            <div class="row four-column">
                <div id="grid">

                    <div class="portfolio-item col-sm-6 col-md-3" data-groups='["all", "letters", "red", "square"]'>
                        <div class="single-portfolio">

                            <div class="portfolio-links">
                                <a href="portfolio-single.html"><i class="fa fa-link"></i></a>
                            </div><!-- /.links -->
                        </div><!-- /.single-portfolio -->
                        <br>
                        <p> <a>หัวข้อข่าว </a><?php echo $row->title; ?></p>
                        <p> <a>รายละเอียดข่าว</a> <?php echo $row->description; ?></p>
                        <p> <a>วันที่เริ่ม</a> <?php echo $row->start; ?></p>
                        <p> <a>วันที่สิ้นสุด</a> <?php echo $row->end; ?></p>
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
