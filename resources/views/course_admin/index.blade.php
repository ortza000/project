@extends('layouts.app')

@section('title','Welcom Homepage')
@section('content')
    <div class="container">
        <br>  <br>
      <h1 align="center">การจัดการข้อมูล อบรม</h1>
        <div class="row">
           <div class="col-md-12">
              <br>

            <table class="table table-dark">
              <tr>
                <th>ID</th>
                <th>name</th>
                <th>desription</th>


                <th>ตรวจสอบคนลงทะเบียน</th>

              </tr>
                @foreach($users as $row)<tr>

                  <td>{{$row['course_id']}}</td>
                  <td>{{$row['course_name']}}</td>
                  <td>{{$row['course_des']}}</td>



                  <td><a href="{{action('admin\CourseStatusController@show',$row['course_id'])}}" class="btn btn-primary">ตรวจสอบคนลงทะเบียน</a></td>
                  <td>

                  </td>
                </tr>
                @endforeach
            </table>
           </div>

        </div>

    </div>


@stop
