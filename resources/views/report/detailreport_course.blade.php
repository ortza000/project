@extends('layouts.app')

@section('title','Welcom Homepage')
@section('content')
    <div class="container">
        <br>  <br>
      <h1 align="center">การออกรายงาน อบรม</h1>
        <div class="row">
           <div class="col-md-12">
            <br> <br>
            <div class="col-md-8">

        </div>
              <br>

            <table class="table table-dark">
              <tr>
                <th>ID</th>
                <th>ชื่อผู้เข้าร่วม</th>




              </tr>
                @foreach($users as $row)<tr>
                  <td>{{$row->std_id}}</td>
                  <td>{{$row->std_name}}</td>
                </tr>
                @endforeach
            </table>

           </div>

        </div>

    </div>


@stop
