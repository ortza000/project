<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8' />
<link href='{{asset('assets/fullcalendar-student/packages/core/main.css')}}' rel='stylesheet' />
<link href='{{asset('assets/fullcalendar-student/packages/daygrid/main.css')}}' rel='stylesheet' />
<link href='{{asset('assets/fullcalendar-student/packages/timegrid/main.css')}}' rel='stylesheet' />
<link href='{{asset('assets/fullcalendar-student/packages/list/main.css')}}' rel='stylesheet' />
<link href='{{asset('assets/fullcalendar-student/css/style.css')}}' rel='stylesheet' />

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >



<meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>

@include('fullcalendar-student.modal-calendar')

  <div id='wrap'>

    <div id='external-events'>
      <h4>รายการอบรม</h4>

      <div id='external-events-list'>

        @if($fastEvents)
            @foreach ($fastEvents as $fastEvent)

            <div class='fc-event'
            style="padding: 4px; border: 1px solid {{$fastEvent->color}}; background-color:{{$fastEvent->color}} "
            data-event='{"id":"{{$fastEvent->id}}", "title": "{{$fastEvent->title}}", "color": "{{$fastEvent->color}}" ,"start":"start","end":"end"}'>{{$fastEvent->title}}</div>
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

  </div>

<script src='{{asset('assets/fullcalendar-student/packages/core/main.js')}}'></script>
<script src='{{asset('assets/fullcalendar-student/packages/interaction/main.js')}}'></script>
<script src='{{asset('assets/fullcalendar-student/packages/daygrid/main.js')}}'></script>
<script src='{{asset('assets/fullcalendar-student/packages/timegrid/main.js')}}'></script>
<script src='{{asset('assets/fullcalendar-student/packages/list/main.js')}}'></script>

<script src='{{asset('assets/fullcalendar-student/packages/core/locales-all.js')}}'></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script src='{{asset('assets/fullcalendar-student/js/script.js')}}'></script>
<script src='{{asset('assets/fullcalendar-student/js/calendar.js')}}'></script>

</body>
</html>
