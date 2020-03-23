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
                    <h1>ลงทะเบียนอบรม</h1>
                </div>
                <ol class="breadcrumb">
                    <li><a href="home">Home</a></li>
                    <li><a href="{{ route('clients-page.index') }}">Pages</a></li>
                    <li class="active">ลงทะเบียนอบรม</li>
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
      <h3 align="center">ลงทะเบียนเข้าร่วมอบรม</h3>

      <?php


      foreach ($users as $users1) {
          $std_id         = $users1->std_id;
          $std_name         = $users1->std_name;
  ?>
        <form method="post" action="{{url('course')}}" >
          {{csrf_field()}}


          <div class="form-group">
            <input type="hidden" name="proid" class="form-control" value="{{$user->course_id}}" readonly />
         </div>

         <br><br>
         <div class="form-group">
            <input type="text" name="stdid" class="form-control" value="<?php echo $std_id; ?>" readonly />
         </div>
         <?php } ?>
         <div class="form-group">
            <input type="text" name="username" class="form-control" value="<?php echo $std_name ?? ''; ?>" readonly />
          </div>
          <div class="form-group">
            <input type="text" name="proname" class="form-control" value="{{$user->course_name}}" readonly />
          </div>

          <div class="form-group">
            <input type="text" name="prodes" class="form-control" value="{{$user->course_des}}" readonly />
          </div>
          <div class="form-group">
            <input type="text" name="stdprodes" class="form-control" value="ลงทะเบียนเข้าร่วมกิจกรรม" readonly />
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
