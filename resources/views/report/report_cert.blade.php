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
                <form action="/searchReport-cert" method="get">
                    <div class="input-group">
                        <input type="search" name="search" class="form-control" >
                        &nbsp;&nbsp;&nbsp;

                        <span class="input-group-prepend">
                            &nbsp;&nbsp;&nbsp;<button type="sumbit" class="btn btn-primary">ค้นหา</button>
                        </span>

                    </div>
                </form>
        </div>
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
