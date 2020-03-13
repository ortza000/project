@extends('layouts.app')

@section('title','Welcom Homepage')
@section('content')
    <div class="container">
        <br>  <br>
      <h1 align="center">การจัดการข้อมูล อบรม</h1>
        <div class="row">
           <div class="col-md-12">
              <br>

            <table class="table table-dark">
              <tr>
                <th>ID</th>
                <th>name</th>
                <th>เรื่อง อบรม</th>


                <th>ตรวจสอบคนลงทะเบียน</th>

              </tr>
              <?php foreach ($users12 as $row):?><tr>

                  <td><?php echo $row->std_id; ?></td>
                  <td><?php echo $row->std_name; ?></td>
                  <td><?php echo $row->course_name; ?></td>

                  <td><a href="/course_admin/create/<?php echo $row->std_id; ?>/<?php echo $row->course_id; ?>" class="btn btn-primary">ปรับสถานะการเข้าร่วม</a></td>
                  <td>

                  </td>
                </tr>
                <?php endforeach; ?>
            </table>
           </div>

        </div>

    </div>


@stop
