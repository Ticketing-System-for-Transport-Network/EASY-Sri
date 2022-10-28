@extends('layouts.app')

@section('content')
    <div class="logo">
        <img src="logo.png" alt="logo" />
    </div>
    <!--generate successfull message-->
    @if (session('message'))
        <div class="alert show">
            <span class="fas fa-exclamation-circle"></span>
            <span class="msg-text">{{ session('message') }}</span>
            <span class="close-btn">
            </span>
        </div>
    @endif
    <div class="col-md-12 text-center">
        <h1 class="page-title">Timetable Details List</h1>
    </div>
    @foreach ($buss as $bus)
        <div class="body-card">
            <div class="containers">
                <div class="card">
                    <div class="box">
                        <div class="contents">
                            <h2>{{ $bus->route_id }}</h2>
                            <h3>Route No: {{ $bus->route_id }}</h3>
                            <br>
                            <h3>Departure Place: {{ $bus->dep }}</h3>
                            <h3>Departure Time: {{ $bus->dep_time }}</h3>
                            <h3>Arrival Place: {{ $bus->arr }}</h3>
                            <h3>Arrival Time: {{ $bus->arr_time }}</h3>
                            <h3>Distance: {{ $bus->dis }}KM</h3>
                            <h3>Time Taken: {{ $bus->dis_time / 60 }} Hours</h3>
                            <h3>Bus Type: {{ $bus->bus_t }}</h3>
                            <h3>Service Type: {{ $bus->ser_t }}</h3>
                            <h3>No Of Buses: {{ $bus->no_bus }}</h3>
                            <h3>Charge: Rs.{{ $bus->charge * $bus->dis }}</h3>
                            @if ($bus->done == 0)
                                <span class="bg-danger">
                                    <h5>Inactive</h5>
                                </span>
                            @else
                                <span class="bg-primary">
                                    <h6>Active</h6>
                                </span>
                            @endif
                            <input type="hidden" class="serDel_val" value="{{ $bus->id }}">
                            <a class="btn btn-warning btn-sm btn-block serviceDeleteBtn" role="button"
                                title="Unnecessary or incorrect rocket information can be deleted."
                                href="{{ route('bustimeview.delete', $bus->id) }}">
                                <h6>Delete</h6>
                            </a>
                            @if ($task->done == 0)
                                <a class="btn btn-warning btn-sm btn-block"
                                    href="{{ route('rocketview.done', $task->id) }}" role="button"
                                    title="Only necessary data can be publish in the user interface.">
                                    <h6>PUBLISH</h6>
                                </a>
                            @else
                                <a class="btn btn-warning btn-sm btn-block"
                                    href="{{ route('rocketview.done', $task->id) }}" role="button"
                                    title="Only necessary data can be unpublish in the user interface.">
                                    <h6>DRAFT</h6>
                                </a>
                            @endif
                            <a class="btn btn-warning btn-sm btn-block" href="javascript:void(0)" role="button"
                                title="Directs to the update interface to edit the data."
                                onclick="rocketEditModal({{ $task->id }})">
                                <h6>EDIT</h6>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    <div class="col-md-12 text-center">
        <div class="btn">
            <a title="Click this button to save the entered data." href="{{ route('rocketinsert') }}" role="button">ADD
                NEW DETAILS</a>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="rocketEdit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="rocketEditLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="rocketEditLabel">Rocket Details Update</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="rocketEditContent">

                </div>
            </div>
        </div>
    </div>
@endsection

@push('css')
    <style>
        body {
            background-color: #F8F8FF;
        }

        img {
            width: 600px;
            height: 500px;
            display: block;
            margin: auto;
            padding: auto;
        }

        .page-title {
            color: #505050;
            margin-top: -15px;
            margin-bottom: 65px;
            text-align: center;
            font-size: 80px;
            font-weight: 1000;
        }

        .body-card {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .containers {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;

        }

        .containers .card {
            position: relative;
            width: 1200px;
            height: 700px;
            box-shadow: inset 5px 5px 5px rgba(0, 0, 0, 0.05),
                inset -5px -5px 5px rgba(255, 255, 255, 0.5),
                5px 5px 5px rgba(0, 0, 0, 0.05),
                -5px -5px 5px rgba(255, 255, 255, 0.5);
            border-radius: 15px;
        }

        .containers .card .box {
            position: absolute;
            top: 20px;
            left: 20px;
            right: 20px;
            bottom: 20px;
            background-image: linear-gradient(174.2deg, rgba(255, 244, 228, 1) 7.1%, rgba(240, 246, 238, 1) 67.4%);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            border-radius: 15px;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: 0.5s;
        }

        .containers .card:hover .box {
            transform: translateY(-50px);
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2);
            background-image: radial-gradient(circle farthest-corner at 10% 20%, rgba(255, 209, 67, 1) 0%, rgba(255, 145, 83, 1) 90%);

        }

        .containers .card .box .contents {
            padding: 20px;
            text-align: center;
        }

        .containers .card .box .contents h2 {
            position: absolute;
            top: -10px;
            right: 30px;
            font-size: 8em;
            color: rgba(0, 0, 0, 0.02);
            transition: 0.5s;
            pointer-events: none;
        }

        .containers .card:hover .box .contents h2 {
            color: rgba(0, 0, 0, 0.05);
        }

        .containers .card .box .contents h3 {
            font-size: 1.8em;
            color: #777;
            z-index: 1;
            transition: 0.5s;
        }

        .containers .card:hover .box .contents h3 {
            color: #fff;
        }

        .containers .card .box .contents a {
            position: relative;
            display: inline-block;
            padding: 8px 20px;
            background: #FFA500;
            margin-top: 15px;
            border-radius: 20px;
            color: #fff;
            text-decoration: none;
            font-weight: 400;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .containers .card:hover .box .contents a {
            background: #505050;
        }

        .containers .card .box .contents span {
            position: relative;
            display: inline-block;
            padding: 8px 20px;
            margin-top: 15px;
            border-radius: 20px;
            color: #fff;
            font-weight: 400;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }
    </style>
@endpush

@push('js')
    <script>
        function rocketEditModal(task_id) {
            var data = {
                task_id: task_id,
            };
            $.ajax({
                url: "{{ route('rocketview.edit') }}",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'GET',
                dataType: '',
                data: data,
                success: function(response) {
                    $('#rocketEdit').modal('show');
                    $('#rocketEditContent').html(response);
                }
            });
        }
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('.serviceDeleteBtn').click(function(e) {
                e.preventDefault();
                var task_id = $(this).closest("td").find('.serDel_val').val();
                //alert(delete_id);
                swal({
                        title: "Are you sure?",
                        text: "Once deleted, you will not be able to recover this data!",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                        if (willDelete) {
                            var data = {
                                "_token": $('input[name=_token]').val(),
                                "id": task_id,
                            };
                            $.ajax({
                                url: '/rocketview/' + task_id + '/delete/',
                                data: data,
                                success: function(response) {
                                    swal(response.status, {
                                            icon: "success",
                                        })
                                        .then((result) => {
                                            location.reload();
                                        });
                                }
                            });
                        }
                    });
            });
        });
    </script>
@endpush
