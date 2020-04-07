@extends('layouts.app')
@section('title','การจัดการรายวิชา')
@section('content')
    <div class="container">
        <br>  <br>
      <h1 align="center">การออกรายงาน รายวิชา</h1>
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

                </div>
    </div>
<br>
            <table class="table table-dark">
              <tr>
                <th>ID</th>

                <th>ชื่อรายวิชา</th>
                <th>รายละเอียด</th>
                <th>เทอม</th>

              </tr>
                @foreach($users as $row)
                <tr>

                    <td>{{$row->sub_id}}</td>
                    <td><a href="{{url('detailreport_subject/'.$row->teh_id)}}">{{$row->sub_name}}</a></td>
                  <td>{{$row->sub_des}}</td>
                  <td>{{$row->sub_term}}</td>
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
