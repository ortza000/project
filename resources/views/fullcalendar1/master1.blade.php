<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8' />
<link href='{{asset('assets/fullcalendar/packages/core/main.css')}}' rel='stylesheet' />
<link href='{{asset('assets/fullcalendar/packages/daygrid/main.css')}}' rel='stylesheet' />
<link href='{{asset('assets/fullcalendar/packages/timegrid/main.css')}}' rel='stylesheet' />
<link href='{{asset('assets/fullcalendar/packages/list/main.css')}}' rel='stylesheet' />
<link href='{{asset('assets/fullcalendar/css/style.css')}}' rel='stylesheet' />

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >



<meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>

@include('fullcalendar1.modal-calendar')

  <div id='wrap'>

    <div id='external-events'>
      <h4>รายการอบรม</h4>

      <div id='external-events-list'>


        @if($fastEvents)
            @foreach ($fastEvents as $fastEvent)

            <div id="boxFastEvent{{ $fastEvent->id }}"
                style="padding: 4px; border: 1px solid {{ $fastEvent->color }}; background-color: {{ $fastEvent->color }}"
                class='fc-event event text-center'
                data-event='{"id":"{{ $fastEvent->course_id }}","course_id":"{{ $fastEvent->course_id }}","title":"{{ $fastEvent->course_name }}","description":"{{ $fastEvent->course_des }}","color":"{{ $fastEvent->color }}","term":"{{ $fastEvent->term }}","type":"{{ $fastEvent->type }}","start":"{{ $fastEvent->start }}","end":"{{ $fastEvent->end }}"}'>
                {{ $fastEvent->course_name }}
            </div>

            @endforeach
        @endif
        <h4>รายการกิจกรรม</h4>
        @if($fastProjects)

        @foreach ($fastProjects as $fastProject)

        <div id="boxFastEvent{{ $fastProject->id }}"
            style="padding: 4px; border: 1px solid {{ $fastProject->color }}; background-color: {{ $fastProject->color }}"
            class='fc-event event text-center'
            data-event='{"id":"{{ $fastProject->pro_id }}","pro_id":"{{ $fastProject->pro_id }}","title":"{{ $fastProject->pro_name }}","description":"{{ $fastProject->pro_des }}","color":"{{ $fastProject->color }}","term":"{{ $fastProject->term }}","type":"{{ $fastProject->type }}","start":"{{ $fastProject->start }}","end":"{{ $fastProject->end }}"}'>
            {{ $fastProject->pro_name }}
        </div>

        @endforeach
    @endif



      </div>



      <p>
        <input type='checkbox' id='drop-remove' />
        <label for='drop-remove'>remove after drop</label>
      </p>
    </div>





    <div id='calendar'
        data-route-load-events="{{route('routeLoadEvents')}}"
         data-route-event-update="{{route('routeEventUpdate')}}"
         data-route-event-store="{{route('routeEventStore')}}"
         data-route-event-delete="{{route('routeEventDelete')}}"
         ></div>

    <div style='clear:both'></div>
    <center><h3><a href="{{ url('course-teacher/create') }}" class="previous">&laquo; ย้อนกลับ</a>
    <a href="{{ url('/image-upload') }}" class="next">หน้าต่อไป &raquo;</a></h3></center>
  </div>

<script src='{{asset('assets/fullcalendar/packages/core/main.js')}}'></script>
<script src='{{asset('assets/fullcalendar/packages/interaction/main.js')}}'></script>
<script src='{{asset('assets/fullcalendar/packages/daygrid/main.js')}}'></script>
<script src='{{asset('assets/fullcalendar/packages/timegrid/main.js')}}'></script>
<script src='{{asset('assets/fullcalendar/packages/list/main.js')}}'></script>

<script src='{{asset('assets/fullcalendar/packages/core/locales-all.js')}}'></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script src='{{asset('assets/fullcalendar/js/script.js')}}'></script>
<script src='{{asset('assets/fullcalendar/js/calendar.js')}}'></script>

</body>
</html>
