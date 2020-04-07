@extends('layouts2.master2')

@section('css')

@endsection

@section('content')

<section class="page-header-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header">
                    <h1>คำถามที่พบบ่อย</h1>
                </div>
                <ol class="breadcrumb">
                    <li><a href="home">Home</a></li>
                    <li><a href="{{ route('clients-page.index') }}">Pages</a></li>
                    <li class="active">คำถามที่พบบ่อย</li>


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
                {{-- <div align="right">  <a href="{{route('project.create')}}" class="btn btn-success" >เพิ่มข้อมูล</a></div> --}}
                @foreach($users as $row)
                <div class="media-body">

                    <h2 class="media-heading">{{$row['name_qus']}}</h2>
                    <span>Sports Club</span>
                    <p>{{$row['name_des']}}</p>
                    @endforeach


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
