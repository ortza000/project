@extends('layouts.app')
@section('title','จัดการฐานข้อมูล คำถามที่พบบ่อย')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12"> <br/>
      <h3 align="center">เพิ่มข้อมูล คำถามที่พบบ่อย</h3>
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
        <form method="post" action="{{url('qustion/insert')}}" >
          {{csrf_field()}}

          <div class="form-group">
            <input type="text" name="qusname" class="form-control" placeholder="หัวข้อคำถาม" />
          </div>
          <div class="form-group">
            <textarea name="qusdes" id="qusdes" cols="155" rows="4"></textarea>

          </div>



          <div class="form-group">
            <input type="submit" class="btn btn-primary" value="ตกลง"/>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
