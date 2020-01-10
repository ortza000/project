@extends('user.master')
@section('title','จัดการฐานข้อมูล นิสิต')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12"> <br/>
      <h3 align="center">เพิ่มข้อมูล นิสิต</h3>
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
        <form method="post" action="{{url('user')}}" >
          {{csrf_field()}}
          <div class="form-group">
          <input type="text" name="stdid" class="form-control" placeholder="รหัสไอดี" />
         </div>
          <div class="form-group">
            <input type="text" name="stdname" class="form-control" placeholder="ป้อนชื่อ นามสกุล" />
          </div>
          <div class="form-group">
            <input type="text" name="stdcard" class="form-control" placeholder="รหัสนิสิต" />
          </div>
          <div class="form-group">
            <input type="text" name="stdyear" class="form-control" placeholder="ปีการศึกษา" />
          </div>
          <div class="form-group">
            <input type="text" name="stdphone" class="form-control" placeholder="เบอร์" />
          </div>
          <div class="form-group">
            <input type="text" name="stdmajor" class="form-control" placeholder="สาขา" />
          </div>
          <div class="form-group">
            <input type="text" name="stdstatus" class="form-control" placeholder="สถานะนิสิต" />
          </div>

          <div class="form-group">
            <input type="submit" class="btn btn-primary" value="ตกลง"/>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
