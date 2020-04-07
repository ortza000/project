@extends('layouts.app')

@section('title','Welcom Homepage')
@section('content')
    <div class="container">
        <br>  <br>
      <h1 align="center">การออกรายงาน ศิษย์เก่า</h1>
        <div class="row">
           <div class="col-md-12">
              <br>

            <div class="col-md-8">
                <form action="/search-student" method="get">
                    <div class="input-group">
                        <input type="search" name="search" class="form-control" >
                        &nbsp;&nbsp;&nbsp;

                        <span class="input-group-prepend">
                            &nbsp;&nbsp;&nbsp;<button type="sumbit" class="btn btn-primary">ค้นหา</button>
                        </span>

                    </div>
                </form>
        </div>

            <div align="right">  ></div>
            <table class="table table-dark">
              <tr>
                <th>ID</th>
                <th>name</th>
                <th>card</th>
                <th>year</th>
                <th>phone</th>
                <th>major</th>
                <th>status</th>

              </tr>
                @foreach($users as $row)<tr>
                  <td>{{$row->std_id}}</td>
                  <td>{{$row->std_name}}</td>
                  <td>{{$row->std_card}}</td>
                  <td>{{$row->std_year}}</td>
                  <td>{{$row->std_phone}}</td>
                  <td>{{$row->std_major}}</td>
                  <td>{{$row->std_status}}</td>

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
    <script type="text/javascript">
      $(document).ready(function(){
        $('.delete_form').on('submit', function(){
          if(confirm("คุณต้องการลบข้อมูลหรือไม่ ?")){
            return true;
          }
          else{
            return false;
          }
        });
      )});
    </script>

@stop
