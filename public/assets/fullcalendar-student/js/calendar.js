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
      eventLimit: false, //ตัวแปรนี้เปิดไว้ จะบอกการใส่จำนวนกิจกรรม
      selectable: false,
      editable: false,
      droppable: false, // this allows things to be dropped onto the calendar
      drop: function(arg) {
        // is the "remove after drop" checkbox checked?
        if (document.getElementById('drop-remove').checked) {
          // if so, remove the element from the "Draggable Events" list
          arg.draggedEl.parentNode.removeChild(arg.draggedEl);
        }
      },
      eventDrop: function(element){
            let start = moment(element.event.start).format("YYYY-MM-DD HH:mm:ss");
            let end = moment(element.event.end).format("YYYY-MM-DD HH:mm:ss");

            let newEvent = {
                _method:'PUT',
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

            let start = moment(element.event.start).format("DD/MM/YYYY HH:mm:ss");
            $("#modalCalendar input[name='start']").val(start);

            let end = moment(element.event.end).format("DD/MM/YYYY HH:mm:ss");
            $("#modalCalendar input[name='end']").val(end);

            let color = element.event.backgroundColor;
            $("#modalCalendar input[name='color']").val(color);

            let description = element.event.extendedProps.description;
            $("#modalCalendar textarea[name='description']").val(description);

      },
      eventResize: function(element){
        let start = moment(element.event.start).format("YYYY-MM-DD HH:mm:ss");
        let end = moment(element.event.end).format("YYYY-MM-DD HH:mm:ss");

        let newEvent = {
            _method:'PUT',
            id: element.event.id,
            start: start,
            end: end
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


