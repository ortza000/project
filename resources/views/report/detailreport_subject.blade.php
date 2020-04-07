@extends('layouts.app')

@section('title','Welcom Homepage')
@section('content')
    <div class="container">
        <br>  <br>
      <h1 align="center">การออกรายงาน รายวิชา</h1>
        <div class="row">
           <div class="col-md-12">
            <br> <br>
            <div class="col-md-8">

        </div>
              <br>

            <table class="table table-dark">
              <tr>
                <th>ID</th>
                <th>รายชื่ออาจารย์ ผู้สอน</th>
              </tr>
                @foreach($users as $row)<tr>
                  <td>{{$row->teh_id}}</td>
                  <td>{{$row->teh_name}}</td>
                </tr>
                @endforeach
            </table>

           </div>

        </div>

    </div>


@stop
