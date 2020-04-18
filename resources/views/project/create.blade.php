@extends('layouts.app')
@section('title','จัดการฐานข้อมูล อาจารย์')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12"> <br/>
      <h3 align="center">เพิ่มข้อมูล อบรม</h3>
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
        <form method="post" action="{{url('project')}}" >
          {{csrf_field()}}
          {{--  <div class="form-group">
          <input type="้hidded" name="courseid" class="form-control" placeholder="รหัสไอดี" />
         </div>  --}}

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
@endsection
