<html lang="en" class="">
<head>
<meta charset="UTF-8">
<title>Laravel File Upload Tutorial Example From Scratch</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
</head>
<body>
    <br><br><br><br>
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

                <div class="form-group">
                    <label for="image"> เลือกหัวข้ออบรม </label>

                    <div class="col-sm-20" >

                        <select id="courseid"  name="courseid" class="form-control courseid">
                            <option value="0"><center>กรุณาเลือกหัวข้ออบรม</center></option>
                            <?php foreach ($users as $row):?>
                            <option value="<?php echo $row->term; ?>"><?php echo $row->term; ?></option>
                            <?php endforeach; ?>
                          </select>

                          <select id="coursename"  name="coursename" class="form-control coursename">
                            <option value="0"></option>
                          </select>
                    </div>

            </div>
            <div class="form-group">
                <label for="image"> เลือกหัวข้อกิจกรรม </label>

                <div class="col-sm-20" >

                    <select id="proid"  name="proid" class="form-control proid">
                        <option value="0"><center>กรุณาเลือกหัวข้อกิจกรรม</center></option>
                        <?php foreach ($users1 as $row):?>
                        <option value="<?php echo $row->term; ?>"><?php echo $row->term; ?></option>
                        <?php endforeach; ?>
                      </select>


                      <select id="proname"  name="proname" class="form-control proname">
                        <option value="0"></option>
                      </select>
                </div>

        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            {{ csrf_field() }}
         </div>
     </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</html>
<script type="text/javascript">
    $('.courseid').change(function(){
        if($(this).val()!=''){
            var select=$(this).val();

            console.log(select);

            var _token=$('input[name="_token"]').val();
            $.ajax({
                    url:"{{route('file.fetch')}}",
                    method:"POST",
                    data:{select:select,_token:_token},
                    success:function(result1){

                        $('.coursename').html(result1);



                    }

            })
        }

    });

    $('.proid').change(function(){
        if($(this).val()!=''){
            var select=$(this).val();

            console.log(select);

            var _token=$('input[name="_token"]').val();
            $.ajax({
                    url:"{{route('file1.fetch')}}",
                    method:"POST",
                    data:{select:select,_token:_token},
                    success:function(result1){

                        $('.proname').html(result1);



                    }

            })
        }

    });

</script>
