@extends('layouts.app')
@section('title','การจัดการรายวิชา')
@section('content')
    <div class="container">
        <br>  <br>
      <h1 align="center">การจัดการข้อมูล รายวิชา</h1>
        <div class="row">
           <div class="col-md-12">
            <br><br>
        <div class="col-md-8">
            <form action="/search-subject" method="get">
                <div class="input-group">
                    <input type="search" name="search" class="form-control" >
                    &nbsp;&nbsp;&nbsp;

                    <span class="input-group-prepend">
                        &nbsp;&nbsp;&nbsp;<button type="sumbit" class="btn btn-primary">ค้นหา</button>
                    </span>
                    &nbsp;&nbsp;&nbsp; <a href="{{route('Subject.create')}}" class="btn btn-success" >เพิ่มข้อมูล</a>
                </div>
    </div>
<br>
            <table class="table table-dark">
              <tr>



                <th>ชื่อรายวิชา</th>
                <th>รายละเอียด</th>
                <th>เทอม</th>


                <th>Edit</th>
                <th>Delete</th>
              </tr>
                @foreach($query as $row)
                <tr>


                  <td>{{$row->sub_name}}</td>
                  <td>{{$row->sub_des}}</td>
                  <td>{{$row->sub_term}}</td>

                  <td><a href="{{action('SubjectController@edit',$row->sub_id)}}" class="btn btn-primary">Edit</a></td>
                  <td>
                    <form  method="post" class="delete_form" action="{{action('SubjectController@destroy',$row->sub_id)}}">
                      {{csrf_field()}}
                    <input type="hidden" name="_method" value="DELETE" />
                    <button type="submit" onclick="return confirm('คุณตกลงที่จะลบข้อมูลหรือไม่?')" class="btn btn-danger">DELETE</button>
                    </form>
                  </td>
                </tr>
                @endforeach
            </table>

           </div>

        </div>

    </div>


@stop
