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


        <form method="post" action="{{action('SubjectController@update',$id)}}" >
          {{csrf_field()}}
          <div class="form-group">
          <input type="text" name="subid" class="form-control" placeholder="รหัสไอดี" value="{{$user->sub_id}}" />
         </div>
         <div class="form-group">
            <input type="text" name="tehid" class="form-control" placeholder="รหัสไอดี อาจารยื" value="{{$user->teh_id}}" />
           </div>
          <div class="form-group">
            <input type="text" name="subname" class="form-control" placeholder="ชื่อรายวิชา"  value="{{$user->sub_name}}" />
          </div>
          <div class="form-group">
            <input type="text" name="subdes" class="form-control" placeholder="รายละเอียดรายวิชา"  value="{{$user->sub_des}}" />
          </div>
          <div class="form-group">
            <input type="text" name="subterm" class="form-control" placeholder="เทอม"  value="{{$user->sub_term}}" />
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
