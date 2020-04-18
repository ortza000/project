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


        <form method="post" action="{{action('ProjectController@update',$id)}}" >
          {{csrf_field()}}
          <div class="form-group">
          <input type="text" name="courseid" class="form-control" placeholder="รหัสไอดี" value="{{$user->course_id}}" />
         </div>
         <div class="form-group">
            <input type="text" name="coursename" class="form-control" placeholder="รหัสไอดี อาจารยื" value="{{$user->course_name}}" />
           </div>
          <div class="form-group">
            <input type="text" name="coursedes" class="form-control" placeholder="ชื่อรายวิชา"  value="{{$user->course_des}}" />
          </div>
          <div class="form-group">
            <input type="text" name="start" class="form-control" placeholder="ชื่อรายวิชา"  value="{{$user->start}}" />
          </div>.   <div class="form-group">
            <input type="text" name="end" class="form-control" placeholder="ชื่อรายวิชา"  value="{{$user->end}}" />
          </div>
          <div class="form-group">
            <input type="text" name="color" class="form-control" placeholder="ชื่อรายวิชา"  value="{{$user->color}}" />
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
