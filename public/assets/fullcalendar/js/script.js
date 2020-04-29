

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

        let id1 = $("#modalFastEvent input[name='id']").val();

        let pro_id = $("#modalFastEvent input[name='pro_id']").val();

        let title1 = $("#modalFastEvent input[name='title']").val();

        let start1 = $("#modalFastEvent input[name='start']").val();

        let end1 = $("#modalFastEvent input[name='end']").val();

        let color1 = $("#modalFastEvent input[name='color']").val();

        let term = $("#modalFastEvent input[name='term']").val();

        let description1 = $("#modalCalendar textarea[name='description']").val();

        let type = $("#modalFastEvent select[name='type']").val();

        let Event = {
            course_id: course_id,
            pro_id:pro_id,
            title: title,
            start: start,
            end: end,
            description1: description1,
            color: color,
            term: term,
            type: type,


        };


        let Event1 = {
            pro_id: pro_id,
            title1: title1,
            start1: start1,
            end1: end1,
            description1: description,
            color1: color1,
            term: term,
            type: type,
        };

        let route;

        if(id == ''){
            route = routeEvents('routeFastEventStore');
        if(id1 == ''){
            route = routeEvents('routeFastEventStore');
        }
        }else{
            route = routeEvents('routeFastEventUpdate');
            Event.id = id;
            Event._method = 'PUT';
            Event1.id1 = id1;
            Event1._method = 'PUT';
        }

        sendEvent(route,Event,Event1);

    });



    $(".saveEvent").click(function () {

        let id =  $("#modalCalendar input[name='id']").val();

        let title = $("#modalCalendar input[name='title']").val();

        let term = $("#modalCalendar input[name='term']").val();

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
            term: term,
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
