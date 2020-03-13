
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
                    <h1>กิจกรรมและโครงการ</h1>
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
  <div class="row">
    <div class="col-md-12"> <br/>
        <div class="container">

            <div class="content-wrapper">

                <div class="our-clients-wrapper">
      <h3 align="center">ลงทะเบียนเข้าร่วมกิจกรรม</h3>

      <?php
      foreach ($users1 as $users12) {
          $course_id         = $users12->course_id;
          $course_name         = $users12->course_name;
          $std_id         = $users12->std_id;
  ?>
        <form method="post" action="{{url('about-us')}}" >
          {{csrf_field()}}

          <div class="form-group">
            <h5 align="center">ชื่อกิจกรรม</h5>
            <div class="form-group">
                <input type="hidden" name="course" class="form-control" value="{{$user->course_id}}" readonly />
             </div>

         <div class="form-group">
                <input type="text" name="stdid" class="form-control" value="<?php echo $std_id; ?>" readonly />
             </div>

         <div class="form-group">
            <input type="text" name="coursename" class="form-control" value="{{$user->course_name}}" readonly />
         </div>
         <?php } ?>

          <div class="form-group">
            <input type="text" name="stdprodes" class="form-control" value="เข้าร่วมกิจกรรม" readonly />
          </div>
          <div class="form-group">
            <input type="text"  name="date"  class="form-control" id="date" value="<?=date('Y-m-d')?>" readonly/>
          </div>




          <div class="form-group">
            <input type="submit" class="btn btn-primary" value="ตกลง"/>
          </div>
        </form>


      </div>

    </div>

  </div>
</div><!-- /.our-clients-wrapper -->

</div><!-- /.content-wrapper -->
</div><!-- /.container -->

@endsection
