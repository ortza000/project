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
            <center><h2>รายชื่อคนละทะเบียนอบรม</h2></center>
            <div class="row margin-bottom-60">




                <section class="team-wrapper">





                    <div class="row">
                            <table class="table table-dark">
                                <tr>

                                  <th>name</th>
                                  <th>status</th>
                                </tr>
                                <?php foreach ($users12 as $row):?>
                                <tr>


                                       <td><?php echo $row->std_name; ?></td>
                                       <td><?php echo $row->course_name; ?></td>
                                <?php endforeach; ?>
                                  </tr>
                              </table>
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
