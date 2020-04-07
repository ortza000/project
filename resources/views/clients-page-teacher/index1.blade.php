@extends('layouts_teacher.master2')

@section('css')

@endsection

@section('content')

<section class="page-header-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header">
                    <h1>กิจกรรมและโครงการ</h1>
                </div>
                <ol class="breadcrumb">
                    <li><a href="home">Home</a></li>
                    <li><a href="">Pages</a></li>
                    <li class="active">กิจกรรมและโครงการ</li>


                </ol>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</section>


<div class="container">

    <div class="content-wrapper">

        <div class="our-clients-wrapper">

            {{--  <div class="media">
                <div class="media-left">
                    <a href="#">
                        <img class="media-object" src="{{asset('img/partner/partner-logo-9.png')}}" alt="">
                    </a>
                </div>  --}}
                <div align="right">  <a href="{{route('event.create')}}" class="btn btn-success" >เพิ่มข้อมูล</a></div>
                @foreach($users as $row)
                <div class="media-body">

                    <h2 class="media-heading">{{$row['pro_name']}}</h2>
                    <span>Sports Club</span>
                    <p>{{$row['pro_des']}}</p>
                    <p><td><a href="{{action('teacher\TeacherClientsPageControlle@edit',$row['pro_id'])}}" class="btn btn-primary">ลงทะเบียน</a></td></p>
                    <p><td><a href="{{action('teacher\TeacherClientsPageControlle@show',$row['pro_id'])}}" class="btn btn-primary">ตรวจสอบคนลงทะเบียน</a></td></p>
                    @endforeach
                </div>

            </div>
            <div class="row">
                <div class="col-12 text-center">
            {{$users->links()}}
                </div>
           </div>

            </div>

        </div><!-- /.our-clients-wrapper -->

    </div><!-- /.content-wrapper -->
</div><!-- /.container -->


@endsection

@section('js')
<script>
    $(document).ready(function () {
        document.getElementById('index2').classList.add('active');

    });
</script>

@endsection
