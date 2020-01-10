@extends('course.master4')
@section('title','จัดการฐานข้อมูล อาจารย์')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12"> <br/>
      <h3 align="center">เพิ่มข้อมูล รายวิชา</h3>
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
        <form method="post" action="{{url('course')}}" >
          {{csrf_field()}}
          <div class="form-group">
          <input type="text" name="subid" class="form-control" placeholder="รหัสไอดี" />
         </div>
          <div class="form-group">
            <input type="text" name="tehid" class="form-control" placeholder="รหัสไอดี อาจารย์" />
          </div>
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
@endsection
