@extends('layouts.app')

@section('title','Welcom Homepage')
@section('content')
    <div class="container">
        <br>  <br>
      <h1 align="center">การจัดการข้อมูล อาจารย์</h1>
        <div class="row">
           <div class="col-md-12">
              <br>
            <div align="right">  <a href="{{route('teacher.create')}}" class="btn btn-success" >เพิ่มข้อมูล</a></div>
            <table class="table table-dark">
              <tr>
                <th>ID</th>
                <th>name</th>
                <th>phone</th>
                <th>
educational background</th>
                <th>email</th>

                <th>Edit</th>
                <th>Delete</th>
              </tr>
                @foreach($users as $row)<tr>
                  <td>{{$row['teh_id']}}</td>
                  <td>{{$row['teh_name']}}</td>
                  <td>{{$row['teh_phone']}}</td>
                  <td>{{$row['teh_qualification']}}</td>
                  <td>{{$row['teh_email']}}</td>

                  <td><a href="#" class="btn btn-primary">Edit</a></td>
                  <td>
                    <form  method="post" class="delete_form" action="{{action('TechersController@destroy',$row['teh_id'])}}">
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
