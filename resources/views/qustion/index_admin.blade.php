@extends('layouts.app')
@section('title','การจัดการรายวิชา')
@section('content')
    <div class="container">
        <br>  <br>
      <h1 align="center">การจัดการข้อมูล รายวิชา</h1>
        <div class="row">
           <div class="col-md-12">
            <br><br>

<br> <a href="{{url('/qustion/create')}}" class="btn btn-success" >เพิ่มข้อมูล</a>
            <table class="table table-dark">
              <tr>
                <th>ID</th>
                <th>ไอดีอาจารย์</th>
                <th>ชื่อรายวิชา</th>

                <th>Edit</th>
                <th>Delete</th>


              </tr>
                @foreach($users as $row)
                <tr>
                  <td>{{$row->id}}</td>
                  <td>{{$row->name_qus}}</td>
                  <td>{{$row->name_des}}</td>
                  <td><a href="{{url('qustionedit/'.$row->id)}}" class="btn btn-primary">Edit</a></td>
                  <td>
                    <form  method="post" class="delete_form" action="{{url('qustiondelete/'.$row->id)}}">
                      {{csrf_field()}}
                    <input type="hidden" name="_method" value="PATCH" />

                    <button type="submit" class="btn btn-danger">DELETE</button>
                    </form>
                    <td>
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
