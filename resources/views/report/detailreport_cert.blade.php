@extends('layouts.app')

@section('title','Welcom Homepage')
@section('content')
    <div class="container">
        <br>  <br>
      <h1 align="center">การออกรายงาน ใบเกียรติบัตร</h1>
        <div class="row">
           <div class="col-md-12">
            <br> <br>
            <div class="col-md-8">

        </div>
              <br>

            <table class="table table-dark">
              <tr>

                <th>รายชื่อผู้ที่ได้ ใบเกียรติบัตร</th>
                <th>หัวข้อ</th>
              </tr>
                @foreach($users as $row)<tr>

                  <td>{{$row->std_name}}</td>
                  <td>{{$row->course_name}}</td>
                </tr>
                @endforeach
            </table>

           </div>

        </div>

    </div>


@stop
