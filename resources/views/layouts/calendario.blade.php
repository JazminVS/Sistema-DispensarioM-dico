<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'/>
    <link href="{{asset('fullcalendar-3.9.0/fullcalendar.min.css')}}" rel='stylesheet' />
    <link href="{{asset('fullcalendar-3.9.0/fullcalendar.print.min.css')}}" rel='stylesheet' media='print' />
    <script src="{{asset('fullcalendar-3.9.0/lib/moment.min.js')}}"></script>
    <script src="{{asset('fullcalendar-3.9.0/lib/jquery.min.js')}}"></script>
    <script src="{{asset('fullcalendar-3.9.0/fullcalendar.min.js')}}"></script>
    <script src="{{asset('')}}https://code.jquery.com/jquery-3.3.1.min.js"></script>

    <style>
        #calendar {
            max-width: 900px;
            margin: 0 auto;
        }

    </style>
</head>
<body>

    <div id='calendar'>
        here!
    </div>
    <script>
        $('#calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay,listWeek'
            },
            defaultDate: '2019-01-09',
            navLinks: true, // can click day/week names to navigate views
            editable: true,
            eventLimit: true, // allow "more" link when too many events
            events: [
                    @foreach($citas as $cita)
                {
                    title : '{{ $cita->asuntocita}}',
                    start : '{{ $cita->diacita }}',
                    url : ''
                },
                @endforeach
            ]
        });
    </script>

</body>
</html>