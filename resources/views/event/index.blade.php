@extends('layouts.app')

@section('title','Welcom Homepage')
@section('content')
    <div class="container">
        <br>  <br>
      <h1 align="center">การจัดการข้อมูล โครงการเเละกิจกรรม</h1>
        <div class="row">
           <div class="col-md-12">
            <br> <br>
            <div class="col-md-8">
                <form action="/search-event" method="get">
                    <div class="input-group">
                        <input type="search" name="search" class="form-control" >
                        &nbsp;&nbsp;&nbsp;

                        <span class="input-group-prepend">
                            &nbsp;&nbsp;&nbsp;<button type="sumbit" class="btn btn-primary">ค้นหา</button>
                        </span>
                        &nbsp;&nbsp;&nbsp; <a href="{{route('event.create')}}" class="btn btn-success" >เพิ่มข้อมูล</a>
                    </div>
        </div>
              <br>

            <table class="table table-dark">
              <tr>
                <th>ID</th>
                <th>name</th>
                <th>desription</th>
                <th>start</th>
                <th>end</th>
                <th>color</th>
                <th>type</th>
                <th>term</th>


                <th>Edit</th>
                <th>Delete</th>
              </tr>
                @foreach($users as $row)<tr>
                  <td>{{$row->pro_id}}</td>
                  <td>{{$row->pro_name}}</td>
                  <td>{{$row->pro_des}}</td>
                  <td>{{$row->start}}</td>
                  <td>{{$row->end}}</td>
                  <td>{{$row->color}}</td>
                  <td>{{$row->type}}</td>
                  <td>{{$row->term}}</td>


                  <td><a href="{{action('EventController@edit',$row->pro_id)}}" class="btn btn-primary">Edit</a></td>
                  <td>
                    <form  method="post" class="delete_form" action="{{action('EventController@destroy',$row->pro_id)}}">
                      {{csrf_field()}}
                    <input type="hidden" name="_method" value="DELETE" />
                    <button type="submit" onclick="return confirm('คุณตกลงที่จะลบข้อมูลหรือไม่?')" class="btn btn-danger">DELETE</button>
                    </form>
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
