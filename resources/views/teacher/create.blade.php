@extends('teacher.master3')
@section('title','จัดการฐานข้อมูล อาจารย์')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12"> <br/>
      <h3 align="center">เพิ่มข้อมูล อาจารย์</h3>
      @if(count($errors) > 0)
      <div class="alert alert-danger">
        <ul>
          @foreach($errors->all() as $errors)
          <li>{{$errors}}</li>
          @endforeach
        </ul>
      </div>
      @endif

      @if(\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div>
      @endif
        <form method="post" action="{{url('teacher')}}" >
          {{csrf_field()}}
          <div class="form-group">
          <input type="text" name="tehid" class="form-control" placeholder="รหัสไอดี" />
         </div>
          <div class="form-group">
            <input type="text" name="tehname" class="form-control" placeholder="ป้อนชื่อ นามสกุล" />
          </div>
          <div class="form-group">
            <input type="text" name="tehphone" class="form-control" placeholder="เบอร์โทร" />
          </div>
          <div class="form-group">
            <input type="text" name="tehqualification" class="form-control" placeholder="วุฒิการศึกษา" />
          </div>
          <div class="form-group">
            <input type="text" name="tehemail" class="form-control" placeholder="email" />
          </div>


          <div class="form-group">
            <input type="submit" class="btn btn-primary" value="ตกลง"/>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
