@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">การจัดการข้อมูล</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <ul id="menu">
                        <h3> <li>ยินดีต้อนรับคุณ <a >{{ Auth::user()->name }}</a></li></h3>

                            <h5><a>การจัดการเมนู</a></h5>
                            <ul>

                                <li> <a  href="{{ route('user.index') }}">
                                    {{ __('การจัดการข้อมูลนิสิต') }}
                                </a></li>

                            <li><a href="{{ route('teacher.index') }}">
                                   {{ __('การจัดการข้อมูลอาจารย์') }}
                                </a> </li>

                            <li><a  href="{{ route('Subject.index') }}">
                                   {{ __('การจัดการข้อมูลรายวิชา') }}
                                </a></li>

                            <li> <a  href="{{ route('event.index') }}">
                                   {{ __('การจัดการข้อมูลโครงการกิจกรรม') }}
                                </a></li>

                                <li><a  href="{{ route('project.index') }}">
                                   {{ __('การจัดการข้อมูลอบรม') }}
                               </a></li>

                               <li><a  href="{{url('qustion')}}">
                                {{ __('การจัดการข้อมูลคำถามที่พบบ่อย') }}
                            </a></li>


                            </ul>


                            <h5><a>การจัดการอบรม</a></h5>


                            <ul>
                                <li><a  href="{{ route('course_admin.index') }}">
                                   {{ __('การจัดการข้อมูลอบรมการลงทะเบียนเข้าร่วม') }}
                               </a></li>
                               <li><a  href="{{ route('course_certificate.index') }}">
                                {{ __('การจัดการข้อมูลอบรมการให้เกียรติบัตร') }}
                            </a></li>

                            </ul>

                            <h5><a>การออกรายงาน</a></h5>

                            <ul>
                                <li><a  href="{{ url('/report_subject') }}">
                                   {{ __('การออกรานงานรายวิชาสาขา') }}
                               </a></li>
                               <li><a   href="{{ url('/report_course') }}">
                                {{ __('การออกรานงานอบรม') }}
                            </a></li>
                            <li><a  href="{{ url('/report_event') }}">
                                {{ __('การออกรานงานกิจกรรม') }}
                            </a></li>
                            <li><a  href="{{ url('/report_studentold') }}">
                                {{ __('การออกรานงานศิษย์เก่า') }}
                            </a></li>
                            <li><a  href="{{ url('/report_cert') }}">
                                {{ __('การออกรานงานใบเกียรติบัตร') }}
                            </a></li>

                            </ul>


                    </ul>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
