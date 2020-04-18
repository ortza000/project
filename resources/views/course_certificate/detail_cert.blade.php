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
                <th>รายชื่อผู้ที่ได้รับ ใบเกียรติบัตร</th>
                <th>หัวข้อ</th>



                <th>ตรวจสอบคนลงทะเบียน</th>

              </tr>


              @foreach($users as $row)<tr>
                  <td>{{$row->std_name}}</td>
                  <td>{{$row->course_name}}</td>

                    <td>
                  {!! Form::checkbox( 'std_id[]', "{$row->std_id}") !!}
                   {!! Form::checkbox( 'course_id[]', "{$row->course_id}") !!}
    </td>
                </tr>

                @endforeach




            </table>
            <center> <input  type="submit" class="btn btn-primary" value="ตกลง"/></center>
        </form>

        </div>

    </div>


@stop
