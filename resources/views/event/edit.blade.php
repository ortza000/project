@extends('layouts.app')
@section('title','จัดการฐานข้อมูล รายวิชา')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12"> <br/>
      <h3 align="center">เเก้ไขข้อมูล รายวิชา</h3>
      @if(count($errors) > 0)
      <div class="alert alert-danger">
        <ul>
          @foreach($errors->all() as $errors)
          <li>{{$errors}}</li>
          @endforeach
        </ul>
      </div>
      @endif


        <form method="post" action="{{action('EventController@update',$id)}}" >
          {{csrf_field()}}
          <div class="form-group">
          <input type="text" name="proid" class="form-control" placeholder="รหัสไอดี" value="{{$user->pro_id}}" />
         </div>
         <div class="form-group">
            <input type="text" name="proname" class="form-control" placeholder="รหัสไอดี อาจารยื" value="{{$user->pro_name}}" />
           </div>
          <div class="form-group">
            <input type="text" name="prodes" class="form-control" placeholder="ชื่อรายวิชา"  value="{{$user->pro_des}}" />
          </div>
          <div class="form-group">
            <input type="time" name="start" class="form-control" placeholder="รหัสไอดี อาจารยื" value="{{$user->start}}" />
           </div>
          <div class="form-group">
            <input type="time" name="end" class="form-control" placeholder="ชื่อรายวิชา"  value="{{$user->end}}" />
          </div>
          <div class="form-group">
            <input type="color" name="color" class="form-control" placeholder="รหัสไอดี อาจารยื" value="{{$user->color}}" />
           </div>
          <div class="form-group">
            <input type="text" name="type" class="form-control" placeholder="ชื่อรายวิชา"  value="{{$user->type}}" />
          </div>
          <div class="form-group">
            <input type="text" name="term" class="form-control" placeholder="ชื่อรายวิชา"  value="{{$user->term}}" />
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
