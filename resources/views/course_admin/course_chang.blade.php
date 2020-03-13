@extends('layouts.app')
@section('title','จัดการฐานข้อมูล นิสิต')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12"> <br/>
      <h3 align="center">ปรับสถานะการเข้าร่วม</h3>
        <form method="post" action="{{url('course_admin')}}" >
          {{csrf_field()}}

          <?php foreach ($users as $row):?>
          <div class="form-group">
            <input type="text" name="stdid" class="form-control" value="<?php echo $row->std_id; ?>" />
          </div>

          <div class="form-group">
            <input type="text" name="courseid" class="form-control" value="<?php echo $row->course_id; ?>" />
          </div>
          <?php endforeach; ?>
          <div class="form-group">
            <input type="text" name="partdes" class="form-control" value="เข้าร่วมอบรม" />
          </div>
          <div class="form-group">
            <input type="text" name="partdate" class="form-control" value="<?=date('Y-m-d')?>" />
          </div>
          <div class="form-group">
            <input type="submit" class="btn btn-primary" value="ตกลง"/>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
