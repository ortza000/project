@extends('layouts.app')
@section('title','จัดการฐานข้อมูล อาจารย์')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12"> <br/>
      <h3 align="center">เพิ่มข้อมูล รายวิชา</h3>



   <form method="post" action="{{url('Subject')}}" >
          {{csrf_field()}}
          {{--  <div class="form-group">
          <input type="text" name="subid" class="form-control" value="" />
         </div>  --}}



         <?php
         foreach ($users as $users1) {
            $teh_id         = $users1->teh_id;
            $teh_name         = $users1->teh_name;
    ?>
          <div class="form-group">
            <input type="text" name="tehid" class="form-control" value="<?php echo $teh_id; ?>" />
          </div>
          <?php } ?>
          <div class="form-group">
            <input type="text" name="subname" class="form-control" placeholder="ชื่อวิชา" />
          </div>
          <div class="form-group">
            <input type="text" name="subdes" class="form-control" placeholder="รายละเอียด" />
          </div>
          <div class="form-group">
            <input type="text" name="subterm" class="form-control" placeholder="เทอมที่" />
          </div>


          <div class="form-group">
            <input type="submit" class="btn btn-primary" value="ตกลง"/>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
