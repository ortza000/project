<html lang="en" class="">
<head>
<meta charset="UTF-8">
<title>Laravel File Upload Tutorial Example From Scratch</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
</head>
<body>
<div class="container">
  <div class="row justify-content-center">
    <div class="card">
       <div class="card-header">อัพโหลดเอกสารกิจกรรมเเละอบรม</div>

         <div class="card-body">
            @if ($message = Session::get('success'))

                <div class="alert alert-success alert-block">

                    <button type="button" class="close" data-dismiss="alert">×</button>

                    <strong>{{ $message }}</strong>

                </div>
            @endif

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ url('fileupload') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <input type="file" class="form-control-file" name="file" id="file" aria-describedby="fileHelp">
                    <small id="fileHelp" class="form-text text-muted">Please upload a valid image file. Size of image should not be more than 2MB.</small>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <div class="form-group">
                    <label for="image"> เลือกหัวข้ออบรม </label>

                    <div class="col-sm-20" >

                        <select id="courseid"  name="courseid" class="form-control">
                            <option value="0"><center>กรุณาเลือกหัวข้อกิจกรรม</center></option>
                            <?php foreach ($users as $row):?>
                            <option value="<?php echo $row->course_id; ?>"><?php echo $row->course_name; ?></option>
                            <?php endforeach; ?>
                          </select>
                    </div>

            </div>
            <div class="form-group">
                <label for="image"> เลือกหัวข้อกิจกรรม </label>

                <div class="col-sm-20" >

                    <select id="proid"  name="proid" class="form-control">
                        <option value="0"><center>กรุณาเลือกหัวข้อกิจกรรม</center></option>
                        <?php foreach ($users1 as $row):?>
                        <option value="<?php echo $row->pro_id; ?>"><?php echo $row->pro_name; ?></option>
                        <?php endforeach; ?>
                      </select>
                </div>

        </div>
            </form>

         </div>
     </div>
  </div>
</div>
</html>
