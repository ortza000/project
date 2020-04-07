

$(function(){



    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(".deleteEvent").click(function () {

        let id = $("#modalCalendar input[name='id']").val();

        let Event = {
            id: id,
            _method: 'DELETE'
        };

        let route = routeEvents('routeEventDelete');

        sendEvent(route,Event);

    });
    $(".saveFastEvent").click(function () {

        let id = $("#modalFastEvent input[name='id']").val();

        let course_id = $("#modalFastEvent input[name='course_id']").val();

        let title = $("#modalFastEvent input[name='title']").val();

        let start = $("#modalFastEvent input[name='start']").val();

        let end = $("#modalFastEvent input[name='end']").val();

        let color = $("#modalFastEvent input[name='color']").val();

        let description = $("#modalCalendar textarea[name='description']").val();

        let Event = {
            course_id: course_id,
            title: title,
            start: start,
            end: end,
            description: description,
            color: color,
        };

        let route;

        if(id == ''){
            route = routeEvents('routeFastEventStore');
        }else{
            route = routeEvents('routeFastEventUpdate');
            Event.id = id;
            Event._method = 'PUT';
        }

        sendEvent(route,Event);

    });


    $(".saveEvent").click(function () {

        let id =  $("#modalCalendar input[name='id']").val();

        let title = $("#modalCalendar input[name='title']").val();

        let course_id = $("#modalFastEvent input[name='course_id']").val();

        let start =  moment($("#modalCalendar input[name='start']").val(),"DD/MM/YYYY HH:mm:ss").format("YYYY-MM-DD HH:mm:ss");

        let end =  moment($("#modalCalendar input[name='end']").val(),"DD/MM/YYYY HH:mm:ss").format("YYYY-MM-DD HH:mm:ss");

        let color = $("#modalCalendar input[name='color']").val();

        let description = $("#modalCalendar textarea[name='description']").val();

        let type = $("#modalCalendar select[name='type']").val();

        let Event = {
            course_id: course_id,
            title: title,
            start: start,
            end: end,
            color: color,
            description: description,
            type: type,
        };

        let route;

       if(id == ''){
           route = routeEvents('routeEventStore');
       }else{
           route = routeEvents('routeEventUpdate');
           Event.id = id;
           Event._method = 'PUT';
       }

       sendEvent(route,Event);
    });

});


function sendEvent(route,data_){

    $.ajax({

        url: route,
        data: data_,
        method: 'POST',
        dataType: 'json',
        success:function (json){
            if(json){
                    location.reload();

            }
        }
    });
}
function routeEvents(route) {
    return document.getElementById('calendar').dataset[route];
}

function resetForm(form){
    $(form)[0].reset();
}
