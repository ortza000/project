@extends('layouts_teacher.master2')

@section('css')

@endsection
@section('content')

<section class="page-header-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header">
                    <h1>รายวิชาที่สอน</h1>
                </div>
                <ol class="breadcrumb">
                    <li><a href="home">Home</a></li>
                    <li><a href="{{ route('faq.index') }}">Pages</a></li>
                    <li class="active">FAQ Page</li>
                </ol>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</section>


<div class="container">
    <div class="content-wrapper">
        <div class="faq-wrapper">
            <div class="row">
                <div class="col-xs-12 col-md-9 col-sm-8">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <h2 align=center >รายวิชาที่สอน</h2>
                        <?php foreach ($users as $row):?>

                        <div class="panel panel-default">
                            <div class="panel-heading panel-heading-link" role="tab" id="headingOne">
                                <h2 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href=""
                                        aria-expanded="true" aria-controls="collapseOne">
                                        <?php echo $row->sub_name; ?>

                                    </a>
                                </h2>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel"
                                aria-labelledby="headingOne">
                                <div class="panel-body">
                                    <?php echo $row->sub_des; ?>

                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>

                    </div>
                </div><!-- /.col-md-9 -->

                <div align="right">  <a href="{{route('faq-teacher.create')}}" class="btn btn-success" >เพิ่มข้อมูล</a></div>
<br>
<br>


            </div><!-- /.row -->
        </div><!-- /.content-wrapper -->
    </div><!-- /.content-wrapper -->
</div><!-- /.container -->

@endsection

@section('js')
<script>
    $(document).ready(function () {
        document.getElementById('index3').classList.add('active');

    });
</script>

@endsection
