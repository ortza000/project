@extends('layouts.app')

@section('title','Welcom Homepage')
@section('content')
    <div class="container">
        <br>  <br>
      <h1 align="center">การจัดการข้อมูล อาจารย์</h1>
        <div class="row">
           <div class="col-md-12">
              <br>

        <div class="col-md-8">
            <form action="/search-teacher" method="get">
                <div class="input-group">
                    <input type="search" name="search" class="form-control" >
                    &nbsp;&nbsp;&nbsp;

                    <span class="input-group-prepend">
                        &nbsp;&nbsp;&nbsp;<button type="sumbit" class="btn btn-primary">ค้นหา</button>
                    </span>
                    &nbsp;&nbsp;&nbsp; <a href="{{route('teacher.create')}}" class="btn btn-success" >เพิ่มข้อมูล</a>
                </div>
    </div>

        <br><br>
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

                    <td>{{$row->id_tech}}</td>
                    <td>{{$row->teh_id}}</td>
                    <td>{{$row->teh_name}}</td>
                    <td>{{$row->teh_phone}}</td>
                    <td>{{$row->teh_qualification}}</td>
                    <td>{{$row->teh_email}}</td>



                  <td><a href="{{action('TechersController@edit',$row->teh_id)}}" class="btn btn-primary">Edit</a></td>
                  <td>
                    <form  method="post" class="delete_form" action="{{action('TechersController@destroy',$row->teh_id)}}">
                      {{csrf_field()}}
                    <input type="hidden" name="_method" value="DELETE" />

                    <button type="submit" class="btn btn-danger">DELETE</button>
                    </form>
                    <td>
                  </td>
                </tr>
                @endforeach
            </table>
            <div class="row">
                <div class="col-12 text-center">
            {{$users->links()}}
                </div>
           </div>
           </div>

        </div>

    </div>


@stop
