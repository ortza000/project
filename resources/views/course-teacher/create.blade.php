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


        <form method="post" action="{{url('course-teacher/create/create1')}}" >
          {{csrf_field()}}


          <div class="form-group">
            <input type="text" name="coursename" class="form-control" placeholder="หัวข้ออบรม" />
          </div>

          <div class="form-group">
            <input type="text" name="coursedes" class="form-control" placeholder="รายละเอียด" />
          </div>
          <div class="form-group">
            <input type="time" name="start" class="form-control" placeholder="เวลาที่เริ่ม" />
          </div>
          <div class="form-group">
            <input type="time" name="end" class="form-control" placeholder="เวลาที่สิ้นสุด" />
          </div>

          <div class="form-group">
            <input type="color" name="color" class="form-control" placeholder="color" />
          </div>
          <div class="form-group">
            <input type="text" name="type" class="form-control" readonly value="อบรม" />
          </div>
          <div class="form-group">
            <select name="term" id="term" class="form-control" >
                <option value="">เลือก เทอม</option>

                <option value="1/63">เทอม 1/63</option>
                <option value="2/63">เทอม 2/63</option>

               </select>
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


