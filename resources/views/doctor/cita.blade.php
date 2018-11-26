@extends('layouts.dashboard')


@section('content')
    <div class="border-bottom border-info">
        <h2 class="text-center text-info">CITA MÉDICA</h2>
    </div>
    <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-user"></i>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="logout.php">Salir</a></li>
                </ul>
            </li>
        </ul>
        <!--
                    <form class="navbar-form navbar-right" role="search">
                      <div class="form-group  is-empty">
                        <input type="text" class="form-control" placeholder="Search">
                        <span class="material-input"></span>
                      </div>
                      <button type="submit" class="btn btn-white btn-round btn-just-icon">
                        <i class="fa fa-search"></i><div class="ripple-container"></div>
                      </button>
                    </form>
                    -->
    </div>
    <script>
        $(document).ready(function() {

            $('#calendar').fullCalendar({
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay'
                },
                defaultDate: '2018-11-16',
                editable: false,
                eventLimit: true, // allow "more" link when too many events
                events: [{"title":"were","url":".\/?view=editreservation&id=1","start":"2018-11-15T11:12"}]		});

        });

    </script>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" data-background-color="blue">
                    <h4 class="title">Calendario de Citas</h4>
                </div>
                <div class="card-content table-responsive">
                    <div id="calendar"></div>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection
