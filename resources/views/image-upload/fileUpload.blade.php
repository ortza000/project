<!-- fileUpload.blade.php -->

<!doctype html>
<html lang="en">
  <head>
    <title>Image Resize in Laravel 6 Before Upload</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Ajax Dynamic Dependent Dropdown in Laravel</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style type="text/css">
     .box{
      width:600px;
      margin:0 auto;
      border:1px solid #ccc;
     }
    </style>
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







                                    <h3 align="center"></h3><br />
                                    <div class="form-group">
                                     <select name="province" id="province" class="form-control province" >
                                      <option value="">เลือก เทอม</option>
                                      @foreach($country_list as $country)
                                      <option value="{{ $country->term}}">เทอม {{ $country->term }}</option>
                                      @endforeach
                                     </select>
                                    </div>

                                    <div class="form-group">
                                        <select name="proid" id="proid"   class="form-control proid" >
                                         <option value="">เลือก หัวข้อ</option>

                                        </select>
                                       </div>



                                    <br />
                                    <br />



                                {{ csrf_field() }}
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
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  </body>
  <script type="text/javascript">
        $('.province').change(function(){
            if($(this).val()!=''){
                var select=$(this).val();

                console.log(select);

                var _token=$('input[name="_token"]').val();
                $.ajax({
                        url:"{{route('dropdown.fetch')}}",
                        method:"POST",
                        data:{select:select,_token:_token},
                        success:function(result1){

                            $('.proid').html(result1);



                        }

                })
            }

        });

        $('.type').change(function(){
            if($(this).val()!=''){
                var select1=$(this).val();
                console.log(select1);

                var _token=$('input[name="_token"]').val();

                $.ajax({
                    url:"{{route('dropdown.fetch')}}",
                    method:"POST",
                    data:{select1:select1,_token:_token},
                    success:function(result){

                    }
                })
            }
        });






  </script>
</html>


