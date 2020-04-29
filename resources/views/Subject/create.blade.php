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



         <div class="form-group">
            <select name="tehid" id="tehid" class="form-control" >
                <option value="">เลือก อาจารย์</option>
                @foreach($users as $row)
                <option value="{{$row->teh_id}}">{{$row->teh_name}}</option>
                @endforeach

               </select>
          </div>
          <div class="form-group">
            <select name="subname1" id="subname1" class="form-control" >
                <option value="">เลือก วิชาที่มีอยู่เเล้ว</option>
                @foreach($users1 as $row1)
                <option value="{{$row1->sub_name}}">{{$row1->sub_name}}</option>
                @endforeach

               </select>
          </div>

          <div class="form-group">
            <input type="text" name="subname" class="form-control" placeholder="ชื่อวิชาใหม่" />
          </div>


          <div class="form-group">
            <select name="subdes" id="subdes" class="form-control" >
                <option value="">เลือก รายละเอียด</option>
                @foreach($users1 as $row1)
                <option value="{{$row1->sub_des}}">{{$row1->sub_des}}</option>
                @endforeach

               </select>
          </div>
          <div class="form-group">
            <select name="subterm" id="subterm" class="form-control" >
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
