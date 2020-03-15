<!-- fileUpload.blade.php -->

<!doctype html>
<html lang="en">
  <head>
    <title>Image Resize in Laravel 6 Before Upload</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container mt-5">
          <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 m-auto">

            @if ($response = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $response }}</strong>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <strong>Original Image:</strong>
                    <br/>
                    <img src="/uploads/original/{{ Session::get('imageName') }}" class="img-fluid" />
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <strong>Resized Image:</strong>
                    <br/>
                    <img src="image/{{ Session::get('imageName') }}" />
                </div>
            </div>
            @endif


            <form method="post" action="{{ url('image-upload') }}" enctype="multipart/form-data">
                {{csrf_field()}}
                    <div class="card shadow">
                        <div class="card-header bg-primary">
                            <h4 class="card-title text-white"> อัพโหลดรูปภาพกิจกรรมเเละอบรม </h4>
                        </div>

                        <div class="card-body">
                            <div class="form-group">
                                <label for="image"> Image </label>
                                <input type="file" name="image1" id="image1" class="form-control">

                                {!! $errors->first('image', '<small class="text-danger">:message</small>') !!}
                            </div>


                        <div class="form-group">
                            <label for="image"> เลือกหัวข้อกิจกรรม </label>

                            <div class="col-sm-20" >

                                <select id="proid"  name="proid" class="form-control">
                                    <option value="0"><center>กรุณาเลือกหัวข้อกิจกรรม</center></option>
                                    <?php foreach ($users as $row):?>
                                    <option value="<?php echo $row->pro_id; ?>"><?php echo $row->pro_name; ?></option>
                                    <?php endforeach; ?>
                                  </select>
                            </div>

                    </div>
                    <div class="form-group">
                        <label for="image"> เลือกหัวข้ออบรม </label>

                        <div class="col-sm-20" >

                            <select id="courseid"  name="courseid" class="form-control">
                                <option value="0"><center>กรุณาเลือกหัวข้ออบรม</center></option>
                                <?php foreach ($users1 as $row):?>
                                <option value="<?php echo $row->course_id; ?>"><?php echo $row->course_name; ?></option>
                                <?php endforeach; ?>
                              </select>
                        </div>

                </div>
                </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-success"> Upload </button>
                        </div>
                    </div>
                </form>
                <br>

            </div>
          </div>
      </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  </body>
</html>
