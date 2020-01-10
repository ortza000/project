@extends('layouts.app')
@section('title','การจัดการรายวิชา')
@section('content')
    <div class="container">
        <br>  <br>
      <h1 align="center">การจัดการข้อมูล รายวิชา</h1>
        <div class="row">
           <div class="col-md-12">
              <br>
            <div align="right">  <a href="{{route('course.create')}}" class="btn btn-success" >เพิ่มข้อมูล</a></div>
            <table class="table table-dark">
              <tr>
                <th>ID</th>
                <th>ไอดีอาจารย์</th>
                <th>ชื่อรายวิชา</th>
                <th>รายละเอียด</th>
                <th>เทอม</th>

                <th>Edit</th>
                <th>Delete</th>
              </tr>
                @foreach($users as $row)
                <tr>
                  <td>{{$row['sub_id']}}</td>
                  <td>{{$row['teh_id']}}</td>
                  <td>{{$row['sub_name']}}</td>
                  <td>{{$row['sub_des']}}</td>
                  <td>{{$row['sub_term']}}</td>

                  <td><a href="#" class="btn btn-primary">Edit</a></td>
                  <td>
                    <form  method="post" class="delete_form" action="{{action('CourseController@destroy',$row['sub_id'])}}">
                      {{csrf_field()}}
                    <input type="hidden" name="_method" value="DELETE" />
                    <button type="submit" class="btn btn-danger">DELETE</button>
                    </form>
                  </td>
                </tr>
                @endforeach
            </table>
           </div>

        </div>

    </div>


@stop
