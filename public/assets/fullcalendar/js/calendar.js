document.addEventListener('DOMContentLoaded', function() {
    var Calendar = FullCalendar.Calendar;
    var Draggable = FullCalendarInteraction.Draggable

    /* initialize the external events
    -----------------------------------------------------------------*/

    var containerEl = document.getElementById('external-events-list');
    new Draggable(containerEl, {
      itemSelector: '.fc-event',
      eventData: function(eventEl) {
        return {
          title: eventEl.innerText.trim()
        }
      }
    });


    /* initialize the calendar
    -----------------------------------------------------------------*/

    var calendarEl = document.getElementById('calendar');
    var calendar = new Calendar(calendarEl, {
      plugins: [ 'interaction', 'dayGrid', 'timeGrid', 'list' ],
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
      },
      locale:"th",
      navLinks: true, //ตัวแปรนี้เอาไว้ คลิ๊กวันที่ ที่มีกิจกรรมได่้
      eventLimit: true, //ตัวแปรนี้เปิดไว้ จะบอกการใส่จำนวนกิจกรรม
      selectable: true,
      editable: true,
      droppable: true, // this allows things to be dropped onto the calendar
      drop: function(element) {
        let Event = JSON.parse(element.draggedEl.dataset.event);
        let Event1 = JSON.parse(element.draggedEl.dataset.event);

        // is the "remove after drop" checkbox checked?
        if (document.getElementById('drop-remove').checked) {
            // if so, remove the element from the "Draggable Events" list
            element.draggedEl.parentNode.removeChild(element.draggedEl);

            Event._method = "DELETE";
            sendEvent(routeEvents('routeFastEventDelete'), Event);
        }

        let start = moment(`${element.dateStr} ${Event.start}`).format("YYYY-MM-DD HH:mm:ss");
        let end = moment(`${element.dateStr} ${Event.end}`).format("YYYY-MM-DD HH:mm:ss");

        let start1 = moment(`${element.dateStr} ${Event1.start1}`).format("YYYY-MM-DD HH:mm:ss");
        let end1 = moment(`${element.dateStr} ${Event1.end1}`).format("YYYY-MM-DD HH:mm:ss");

        Event.start = start;
        Event.end = end;
        Event1.start1 = start1;
        Event1.end1 = end1;

        delete Event.id;
        delete Event._method;

        console.log(element.draggedEl.dataset.event);

         sendEvent(routeEvents('routeEventStore'), Event,Event1);

      },
      eventDrop: function(element){
            let start = moment(element.event.start).format("YYYY-MM-DD HH:mm:ss");
            let end = moment(element.event.end).format("YYYY-MM-DD HH:mm:ss");

            let newEvent = {
                _method:'PUT',

                course_id: element.event.course_id,
                title: element.event.title,
                id: element.event.id,
                start: start,
                end: end
            };
            sendEvent(routeEvents('routeEventUpdate'),newEvent);

      },
      eventClick: function(element){

            resetForm("#formEvent");

            $("#modalCalendar").modal('show');
            $("#modalCalendar #titleModal").text('หัวข้อ');
            $("#modalCalendar button.deleteEvent").css("display","flex");



            let id = element.event.id;
            $("#modalCalendar input[name='id']").val(id);

            let title = element.event.title;
            $("#modalCalendar input[name='title']").val(title);

            let course_id = element.event.course_id;
            $("#modalCalendar input[name='course_id']").val(course_id);

            let start = moment(element.event.start).format("DD/MM/YYYY HH:mm:ss");
            $("#modalCalendar input[name='start']").val(start);

            let end = moment(element.event.end).format("DD/MM/YYYY HH:mm:ss");
            $("#modalCalendar input[name='end']").val(end);

            let color = element.event.backgroundColor;
            $("#modalCalendar input[name='color']").val(color);

            let description = element.event.extendedProps.description;
            $("#modalCalendar textarea[name='description']").val(description);

            let type = element.event.extendedProps.type;
            $("#modalCalendar select[name='type']").val(type);

            let term = element.event.extendedProps.term;
            $("#modalCalendar input[name='term']").val(term);

      },
      eventResize: function(element){
        let start = moment(element.event.start).format("YYYY-MM-DD HH:mm:ss");
        let end = moment(element.event.end).format("YYYY-MM-DD HH:mm:ss");

        let newEvent = {
            _method:'PUT',
            title: element.event.title,
            id: element.event.id,
            start: start,
            end: end,
            term: element.event.term
        };
        sendEvent(routeEvents('routeEventUpdate'),newEvent);
      },
      select: function(element){

        resetForm("#formEvent");

        $("#modalCalendar").modal('show');
        $("#modalCalendar #titleModal").text('เพิ่มข้อมูลกิจกรรม');
        $("#modalCalendar button.deleteEvent").css("display","none");



        let start = moment(element.start).format("DD/MM/YYYY HH:mm:ss");
        $("#modalCalendar input[name='start']").val(start);

        let end = moment(element.end).format("DD/MM/YYYY HH:mm:ss");
        $("#modalCalendar input[name='end']").val(end);


        $("#modalCalendar input[name='color']").val("#3788D8");

        calendar.unselect();

      },
      events: routeEvents('routeLoadEvents'),
    });
    calendar.render();

  });


