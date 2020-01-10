@extends('layouts.app')

@section('title','Welcom Homepage')
@section('content')
    <div class="container">
        <br>  <br>
      <h1 align="center">การจัดการข้อมูล นิสิต</h1>
        <div class="row">
           <div class="col-md-12">
              <br>
            <div align="right">  <a href="{{route('user.create')}}" class="btn btn-success" >เพิ่มข้อมูล</a></div>
            <table class="table table-dark">
              <tr>
                <th>ID</th>
                <th>name</th>
                <th>card</th>
                <th>year</th>
                <th>phone</th>
                <th>major</th>
                <th>status</th>
                <th>Edit</th>
                <th>Delete</th>
              </tr>
                @foreach($users as $row)<tr>
                  <td>{{$row['std_id']}}</td>
                  <td>{{$row['std_name']}}</td>
                  <td>{{$row['std_card']}}</td>
                  <td>{{$row['std_year']}}</td>
                  <td>{{$row['std_phone']}}</td>
                  <td>{{$row['std_major']}}</td>
                  <td>{{$row['std_status']}}</td>
                  <td><a href="{{action('UserController@edit',$row['std_id'])}}" class="btn btn-primary">Edit</a></td>
                  <td>
                    <form  method="post" class="delete_form" action="{{action('UserController@destroy',$row['std_id'])}}">
                      {{csrf_field()}}
                    <input type="hidden" name="_method" value="DELETE" />
                    <button type="submit" class="btn btn-danger">DELETE</button>
                    </form>
                  </td>
                </tr>
                @endforeach
            </table>
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
