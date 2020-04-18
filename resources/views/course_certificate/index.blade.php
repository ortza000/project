@extends('layouts.app')

@section('title','Welcom Homepage')
@section('content')
    <div class="container">
        <br>  <br>
      <h1 align="center">การจัดการข้อมูล ใบเกียรติบัตร</h1>
        <div class="row">
           <div class="col-md-12">
              <br>
              <form method="post" action="/checkbox-example">
                {{csrf_field()}}
            <table class="table table-dark">
              <tr>
                <th>ID</th>
                <th>หัวข้อ อบรม</th>



                <th>ตรวจสอบคนเข้าร่วมที่ได้ใบเกียรติบัตร</th>

              </tr>

              @foreach($users as $row)<tr>

                  <td>{{$row['course_id']}}</td>
                  <td>{{$row['course_name']}}</td>
        <td><a href="{{action('admin\CourseCertificateController@show',$row['course_id'])}}" class="btn btn-primary">ตรวจสอบคนเข้าร่วมที่ได้ใบเกียรติบัตร</a></td>
                </tr>

                @endforeach




            </table>
        </form>

        </div>

    </div>


@stop
