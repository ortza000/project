@extends('layouts_teacher.master2')

@section('css')

@endsection
@section('content')

<section class="page-header-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header">
                    <h1>ข่าวกิจกรรม</h1>
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
            <ul class="list-inline" id="filter">
            </ul>

            <div class="row four-column">
                <div id="grid">
                    <h3>หมวดรูปภาพกิจกรรม เทอม 1</h3>
                    <?php foreach ($users as $row):?>
                    <div class="col-sm-7">


                        <h4><a href="{{url('New-event/'.$row->id)}}"><?php echo $row->title; ?> เทอม <?php echo $row->term; ?></a></h4>

                    </div><!-- /.portfolio-item -->
                    <?php endforeach; ?>
                </div><!-- /#grid -->
            </div><!-- /.row -->


            <div class="row four-column">
                <div id="grid">
                    <h3>หมวดรูปภาพกิจกรรม เทอม 2</h3>
                    <?php foreach ($users2 as $row1):?>
                    <div class="col-sm-7">


                        <h4><a href="{{url('New-event/'.$row1->id)}}"><?php echo $row1->title; ?> เทอม <?php echo $row1->term; ?></a></h4>

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
