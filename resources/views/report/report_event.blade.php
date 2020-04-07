@extends('layouts.app')

@section('title','Welcom Homepage')
@section('content')
    <div class="container">
        <br>  <br>
      <h1 align="center">การออกรายงาน โครงการเเละกิจกรรม</h1>
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

                    </div>
        </div>
              <br>

            <table class="table table-dark">
              <tr>
                <th>ID</th>
                <th>name</th>
                <th>desription</th>

              </tr>
                @foreach($users as $row)<tr>
                    <td><a href="{{url('detailreport_event/'.$row->pro_id)}}">{{$row->pro_id}}</a></td>
                  <td>{{$row->pro_name}}</td>
                  <td>{{$row->pro_des}}</td>
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
