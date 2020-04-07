@extends('layouts.app')

@section('title','Welcom Homepage')
@section('content')
    <div class="container">
        <br>  <br>
      <h1 align="center">การออกรายงาน ใบเกียรติบัตร</h1>
        <div class="row">
           <div class="col-md-12">
            <br> <br>

              <br>

            <table class="table table-dark">
              <tr>

                <th>ID</th>
                <th>หัวข้ออบรม</th>



              </tr>
                @foreach($users as $row)<tr>


                  <td><a href="{{url('detailreport_cert/'.$row->course_id)}}">{{$row->course_id}}</a></td>
                  <td>{{$row->course_name}}</td>
                </tr>
                @endforeach
            </table>

           </div>

        </div>

    </div>


@stop
