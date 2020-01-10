@extends('user.master')
@section('title','จัดการฐานข้อมูล นิสิต')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12"> <br/>
      <h3 align="center">เเก้ไขข้อมูล นิสิต</h3>
      @if(count($errors) > 0)
      <div class="alert alert-danger">
        <ul>
          @foreach($errors->all() as $errors)
          <li>{{$errors}}</li>
          @endforeach
        </ul>
      </div>
      @endif


        <form method="post" action="{{action('UserController@update',$id)}}" >
          {{csrf_field()}}
          <div class="form-group">
          <input type="text" name="stdid" class="form-control" placeholder="รหัสไอดี" value="{{$user->std_id}}" />
         </div>
          <div class="form-group">
            <input type="text" name="stdname" class="form-control" placeholder="ป้อนชื่อ นามสกุล"  value="{{$user->std_name}}" />
          </div>
          <div class="form-group">
            <input type="text" name="stdcard" class="form-control" placeholder="รหัสนิสิต"  value="{{$user->std_card}}" />
          </div>
          <div class="form-group">
            <input type="text" name="stdyear" class="form-control" placeholder="ปีการศึกษา"  value="{{$user->std_year}}" />
          </div>
          <div class="form-group">
            <input type="text" name="stdphone" class="form-control" placeholder="เบอร์"  value="{{$user->std_phone}}" />
          </div>
          <div class="form-group">
            <input type="text" name="stdmajor" class="form-control" placeholder="สาขา"  value="{{$user->std_major}}" />
          </div>
          <div class="form-group">
            <input type="text" name="stdstatus" class="form-control" placeholder="สถานะนิสิต"  value="{{$user->std_status}}" />
          </div>

          <div class="form-group">
            <input type="submit" class="btn btn-primary" value="อัพเดท"/>
          </div>
          <input type="hidden" name="_method" value="PATCH" />
        </form>
      </div>
    </div>
  </div>
@endsection
