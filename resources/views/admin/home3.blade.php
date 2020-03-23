@extends('layouts_teacher.master2')
@section('css')

@endsection
@section('content')

<section class="page-header-wrapper">
    <br>
    <div id="x-corp-carousel" class="carousel slide hero-slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#x-corp-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#x-corp-carousel" data-slide-to="1"></li>
        </ol>

        <!-- Wrapper for slides -->


                <img src="img/buufix.jpg" alt="Hero Slide">
                <!--Slide Image-->

                <div class="container">
                    <div class="carousel-caption">

                    </div>
                    <!--.carousel-caption-->
                </div>
                <!--.container-->

            <!--.item-->




        <!--.carousel-inner-->

        <!-- Controls -->
        <a class="left carousel-control" href="#x-corp-carousel" role="button" data-slide="prev">
            <i class="fa fa-angle-left" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#x-corp-carousel" role="button" data-slide="next">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- #x-corp-carousel-->
</section>
<div class="container">
    <div class="content-wrapper">
        <section class="intro-wrapper">
            <div class="row">
                <div class="col-lg-6 col-md-8">
                    <h2 class="wow fadeInDown">ยินดีต้อนรับสู่เว็บสาขาเทคโนโลยีสารสนเทศ รูปแบบอาจารย์</h2>
                    <h3 class="wow fadeInDown">ชื่อหลักสูตร</h3>
                    <p class="wow fadeInDown">หลักสูตรวิทยาศาสตรบัณฑิต สาขาวิชาเทคโนโลยีสารสนเทศ
                    </p>
                    {{csrf_field()}}
                    <h3 class="wow fadeInDown">ปรัชญา</h3>
                    <p class="wow fadeInDown">
                        ผลิตบัณฑิตในสาขาวิชาเทคโนโลยีสารสนเทศให้มีความรู้และเชี่ยวชาญทั้งภาคทฤษฎีและภาคปฏิบัติ
                        สามารถประยุกต์ให้เกิดประโยชน์ต่อองค์กร สังคม และประเทศชาติอย่างมีประสิทธิภาพ
                        มีความรับผิดชอบและมีคุณธรรม</p>

                    <h3 class="wow fadeInDown">คุณสมบัติผู้เข้าศึกษา</h3>
                    <p class="wow fadeInDown">สำเร็จการศึกษาระดับมัธยมศึกษาตอนปลายหรือเทียบเท่า
                        โปรแกรมที่เน้นคณิตศาสตร์ โดยผ่านการคัดเลือกตามเกณฑ์และ/หรือ
                        เป็นไปตามประกาศของมหาวิทยาลัย</p>

                    <a class="btn btn-primary wow fadeInDown" href="#" role="button">Read More</a>
                </div>

                <div class="col-lg-6 col-md-4"></div>
            </div><!-- /.row -->
        </section><!-- /.intro-wrapper -->


        {{-- <section class="service-wrapper">
            <h2 class="section-title wow fadeInDown">ข่าวประชาสัมพันธ์</h2>
            @foreach($errors as $row)
            <div class="row">
                <div class="col-md-6 wow fadeInRight">
                    <div class="media">
                        <a class="media-left" href="#">
                            <span class="icon bg1 flaticon-increasing5"></span>
                        </a>

                        <div class="media-body">
                            <h3 class="media-heading"><a href="#"> {{$row['pro_id']}}</a></h3>
                            <h3 class="media-heading"><a href="#"> {{$row['pro_name']}}</a></h3>
                            <a href="register_coruse.php?course_id=1"><input type="submit"
                                    method="get" value="อ่านข่าวนี้" class="btn btn-primary"></a>
                        </div> <!-- /.media-body -->
                    </div> <!-- /.media -->
                </div> <!-- /.col-md-6 -->
                @endforeach


        </section> --}}
        {{-- <section class="service-wrapper">
            <nav class="pagination-wrap text-center">
                <ul class="pagination">
                    <li class="disabled"><a title="Previous"><i class="flaticon-arrowhead4"></i></a>
                    </li>
                    <li>
                        <a href="index.php?page=1" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li><a href="index.php?page=1">1</a></li>
                    <li><a href="index.php?page=2">2</a></li>
                    <li>

                    <li>
                        <a href="index.php?page=2" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>

                    <li><a title="Next" href="#"><i class="flaticon-arrow437"></i></a></li>
                </ul>

            </nav>
        </section> --}}







        </section>
    </div><!-- /.content-wrapper -->
</div><!-- /.container -->

@endsection

@section('js')
<script>
    $(document).ready(function () {
        document.getElementById('master').classList.add('active');
    });
</script>
@endsection

