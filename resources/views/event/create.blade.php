@extends('layouts.app')
@section('title','จัดการฐานข้อมูล อาจารย์')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12"> <br/>
      <h3 align="center">เพิ่มข้อมูล กิจกรรมโครงการ</h3>

        <form method="post" action="{{url('event')}}" >
          {{csrf_field()}}


          <div class="form-group">
            <input type="text" name="proname" class="form-control" placeholder="ชื่อกิจกรรม" />
          </div>

          <div class="form-group">
            <textarea name="prodes" id="prodes" class="form-control" cols="155"  placeholder="รายละเอียดกิจกรรม"  rows="4"></textarea>
          </div>




          <div class="form-group">
            <input type="submit" class="btn btn-primary" value="ตกลง"/>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
