@extends('layouts.app')

@section('title','Welcom Homepage')
@section('content')

    <div class="container">
        <br>  <br>
      <h1 align="center">การจัดการข้อมูล ปรับสถานะการเข้าร่วมอบรม</h1>
        <div class="row">
           <div class="col-md-12">
              <br>
              <form name='frmMain' method="post" action="/checkbox-status">
                {{csrf_field()}}

                <p><input type="button" class="check" value="Check All" />
                    <input type="button" class="uncheck" value="UnCheck All" />
                 </p>
            <table class="table table-dark">
              <tr>
                {{-- <th>ID</th> --}}
                <th>name</th>
                <th>เรื่อง อบรม</th>


                <th>ตรวจสอบคนลงทะเบียน</th>


              </tr>
              <?php foreach ($users12 as $row):?><tr>

                  <td><?php echo $row->std_name; ?></td>
                  <td><?php echo $row->course_name; ?></td>
                  <td>
                    <div class="form-group">
                  {!! Form::checkbox( 'std_id[]', $row->std_id  ,false,['class' => 'questionCheckBox'])  !!}
                </div>
                  {!! Form::hidden( 'course_id[]', $row->course_id  ) !!}
                </td>
                </tr>
                <?php endforeach; ?>

            </table>
            <center> <input  type="submit" class="btn btn-primary" value="ตกลง"/></center>
           </div>

        </form>
        </div>

    </div>

@stop


