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
                    <h1>กิจกรรมและโครงการ</h1>
                </div>
                <ol class="breadcrumb">
                    <li><a href="home">Home</a></li>
                    <li><a href="">Pages</a></li>
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
      foreach ($users as $users1) {
          $teh_id         = $users1->teh_id;
          $teh_name         = $users1->teh_name;
  ?>
        <form method="post" action="{{url('clients-page-teacher')}}" >
          {{csrf_field()}}

          <div class="form-group">
            <h5 align="center">ชื่อกิจกรรม</h5> <select name="proid" class="form-control" required="required" >
            <option
            value="{{$user->pro_id}}"> {{$user->pro_name}}
          </option>

         </div>
         <br><br>
         <div class="form-group">
            <input type="text" name="stdid" class="form-control" value="<?php echo $teh_id; ?>" readonly />
         </div>
         <?php } ?>
         <div class="form-group">
            <input type="text" name="username" class="form-control" value="<?php echo $teh_name ?? ''; ?>" readonly />
          </div>
          <div class="form-group">
            <input type="text" name="proname" class="form-control" value="{{$user->pro_name}}" readonly />
          </div>

          <div class="form-group">
            <input type="text" name="prodes" class="form-control" value="{{$user->pro_des}}" readonly />
          </div>
          <div class="form-group">
            <input type="text" name="stdprodes" class="form-control" value="ลงทะเบียนเข้าร่วมกิจกรรม" readonly />
          </div>
          <div class="form-group">
            <input type="text"  name="date"  class="form-control" id="date" value="<?=date('Y-m-d')?>" readonly/>
          </div>
          <input type="checkbox" id="vehicle1" name="vehicle1" value="{{$user->pro_id}}">
            <label for="vehicle1"> เป็นผู้ดูเเลกิจกรรม</label><br>




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
