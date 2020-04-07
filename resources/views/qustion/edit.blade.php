@extends('layouts.app')
@section('title','จัดการฐานข้อมูล นิสิต')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12"> <br/>
      <h3 align="center">เเก้ไขข้อมูล อาจารย์</h3>
      @if(count($errors) > 0)
      <div class="alert alert-danger">
        <ul>
          @foreach($errors->all() as $errors)
          <li>{{$errors}}</li>
          @endforeach
        </ul>
      </div>
      @endif


        <form method="post" action="{{url('qustionupdate/'.$user->id)}}" >
          {{csrf_field()}}
          <div class="form-group">
          <input type="text" name="qusid" class="form-control" placeholder="รหัสไอดี" value="{{$user->id}}" />
         </div>
          <div class="form-group">
            <input type="text" name="qusname" class="form-control" placeholder="ป้อนชื่อ นามสกุล"  value="{{$user->name_qus}}" />
          </div>
          <div class="form-group">
            <input type="text" name="qusdes" class="form-control" placeholder="รหัสนิสิต"  value="{{$user->name_des}}" />
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
