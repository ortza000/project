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
            <br><br><br>
            <div class="content-wrapper">

                <div class="our-clients-wrapper">
      <h3 align="center">ลงทะเบียนอบรม</h3>


   <form method="post" action="{{url('faq-teacher')}}" >
          {{csrf_field()}}
          {{--  <div class="form-group">
          <input type="text" name="subid" class="form-control" value="" />
         </div>  --}}



         <?php
         foreach ($users as $users1) {
            $teh_id         = $users1->teh_id;
            $teh_name         = $users1->teh_name;
    ?>
          <div class="form-group">
            <input type="text" name="tehid" class="form-control" value="<?php echo $teh_id; ?>" />
          </div>
          <?php } ?>
          <div class="form-group">
            <input type="text" name="subname" class="form-control" placeholder="ชื่อวิชา" />
          </div>
          <div class="form-group">
            <input type="text" name="subdes" class="form-control" placeholder="รายละเอียด" />
          </div>
          <div class="form-group">
            <input type="text" name="subterm" class="form-control" placeholder="เทอมที่" />
          </div>


          <div class="form-group">
            <input type="submit" class="btn btn-primary" value="ตกลง"/>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

</div>

</div>
</div><!-- /.our-clients-wrapper -->

</div><!-- /.content-wrapper -->
</div><!-- /.container -->


