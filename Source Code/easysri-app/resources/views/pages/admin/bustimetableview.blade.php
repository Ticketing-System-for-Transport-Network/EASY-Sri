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
                            <img src="b1.png">
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
                                    <h5>Active</h5>
                                </span>
                            @endif
                            <div>
                                <input type="hidden" class="serDel_val" value="{{ $bus->id }}">
                                <a class="serviceDeleteBtn" role="button"
                                    title="Unnecessary or incorrect information can be deleted."
                                    href="{{ route('bustimeview.delete', $bus->id) }}">
                                    <h5>Delete</h5>
                                </a>
                                @if ($bus->done == 0)
                                    <a href="{{ route('bustimeview.done', $bus->id) }}" role="button"
                                        title="Only necessary data can be publish in the user interface.">
                                        <h5>Publish</h5>
                                    </a>
                                @else
                                    <a href="{{ route('bustimeview.done', $bus->id) }}" role="button"
                                        title="Only necessary data can be unpublish in the user interface.">
                                        <h5>Draft</h5>
                                    </a>
                                @endif
                                <a href="javascript:void(0)" role="button"
                                    title="Directs to the update interface to edit the data."
                                    onclick="busEditModal({{ $bus->id }})">
                                    <h5>Edit</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 text-center">
            <div style="padding-bottom: 10vh;">
                <a class="btn btn-warning btn-lg" title="Click this button to save the entered data."
                    href="{{ route('bustimeinsert') }}" role="button">ADD
                    NEW DETAILS</a>
            </div>
        </div>
    @endforeach


    <!-- Modal -->
    <div class="modal fade" id="busEdit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="busEditLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="busEditLabel">Timetable Details Update Menu</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="busEditContent">

                </div>
            </div>
        </div>
    </div>
    <div class="img-patterns">
        <svg width="" height="320px" viewBox="" version="1.1" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink">
            <!-- Generator: Sketch 55.2 (78181) - https://sketchapp.com -->
            <title>Rangitikei</title>
            <desc>Created with Sketch.</desc>
            <g id="Patterns" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g id="Rangitikei">
                    <g transform="translate(0.000000, -100.000000)" id="Shape">
                        <rect fill="#ECECF4" x="0" y="100" width="1600" height="1200"></rect>
                        <rect fill="#111747" x="800" y="100" width="200" height="200"></rect>
                        <rect fill="#111747" x="600" y="100" width="200" height="200"></rect>
                        <path
                            d="M300,500 L400,500 L400,700 L300,700 C244.771525,700 200,655.228475 200,600 C200,544.771525 244.771525,500 300,500 Z"
                            fill="#111747"></path>
                        <rect fill="#111747" x="600" y="500" width="200" height="200"></rect>
                        <rect fill="#FFC641" x="600" y="700" width="200" height="200"></rect>
                        <rect fill="#06818E" x="1000" y="500" width="200" height="200"></rect>
                        <rect fill="#06818E" x="800" y="500" width="200" height="200"></rect>
                        <rect fill="#FFC641" x="600" y="1100" width="200" height="200"></rect>
                        <rect fill="#111747" x="400" y="500" width="200" height="200"></rect>
                        <rect fill="#FFFFFF" x="600" y="900" width="200" height="200"></rect>
                        <rect fill="#16A3B2" x="600" y="300" width="200" height="200"></rect>
                        <path
                            d="M800,500 L900,500 C955.228475,500 1000,544.771525 1000,600 C1000,655.228475 955.228475,700 900,700 L800,700 L800,500 Z"
                            fill="#111747"></path>
                        <path
                            d="M800,1100 L900,1100 C955.228475,1100 1000,1144.77153 1000,1200 C1000,1255.22847 955.228475,1300 900,1300 L800,1300 L800,1100 Z"
                            fill="#FE5E33"></path>
                        <path
                            d="M800,900 L900,900 C955.228475,900 1000,944.771525 1000,1000 C1000,1055.22847 955.228475,1100 900,1100 L800,1100 L800,900 Z"
                            fill="#16A3B2"></path>
                        <path
                            d="M700,100 C755.228475,100 800,144.771525 800,200 L800,300 L600,300 L600,200 C600,144.771525 644.771525,100 700,100 Z"
                            fill="#16A3B2"></path>
                        <path
                            d="M1300,300 C1355.22847,300 1400,344.771525 1400,400 L1400,500 L1200,500 L1200,400 C1200,344.771525 1244.77153,300 1300,300 Z"
                            fill="#FE5E33"></path>
                        <path
                            d="M900,300 C955.228475,300 1000,344.771525 1000,400 L1000,500 L800,500 L800,400 C800,344.771525 844.771525,300 900,300 Z"
                            fill="#FE5E33"></path>
                        <path
                            d="M500,300 C555.228475,300 600,344.771525 600,400 L600,500 L500,500 C444.771525,500 400,455.228475 400,400 C400,344.771525 444.771525,300 500,300 Z"
                            fill="#FF87A2"></path>
                        <path
                            d="M500,1100 C555.228475,1100 600,1144.77153 600,1200 L600,1300 L400,1300 L400,1200 C400,1144.77153 444.771525,1100 500,1100 Z"
                            fill="#FF87A2"></path>
                        <rect fill="#16A3B2" x="700" y="0" width="200" height="200"></rect>
                        <path
                            d="M600,500 L800,500 C800,555.228475 755.228475,600 700,600 C644.771525,600 600,555.228475 600,500 Z"
                            fill="#06818E"></path>
                        <path
                            d="M1000,300 L1200,300 C1200,355.228475 1155.22847,400 1100,400 C1044.77153,400 1000,355.228475 1000,300 Z"
                            fill="#06818E"></path>
                        <path
                            d="M1200,400 L1400,400 C1400,455.228475 1355.22847,500 1300,500 C1244.77153,500 1200,455.228475 1200,400 Z"
                            fill="#FFC641"></path>
                        <path
                            d="M900,700 C955.228475,700 1000,744.771525 1000,800 C1000,855.228475 955.228475,900 900,900 L800,900 L800,800 C800,744.771525 844.771525,700 900,700 Z"
                            fill="#16A3B2"></path>
                        <path
                            d="M300,700 L400,700 L400,800 C400,855.228475 355.228475,900 300,900 C244.771525,900 200,855.228475 200,800 C200,744.771525 244.771525,700 300,700 Z"
                            fill="#16A3B2"></path>
                        <path
                            d="M800,900 L600,900 C600,844.771525 644.771525,800 700,800 C755.228475,800 800,844.771525 800,900 Z"
                            fill="#06818E"></path>
                        <path
                            d="M1600,500 L1400,500 C1400,444.771525 1444.77153,400 1500,400 C1555.22847,400 1600,444.771525 1600,500 Z"
                            fill="#16A3B2"></path>
                        <path
                            d="M600,700 L400,700 C400,644.771525 444.771525,600 500,600 C555.228475,600 600,644.771525 600,700 Z"
                            fill="#FE5E33"></path>
                        <rect fill="#FFFFFF" x="1200" y="900" width="200" height="200"></rect>
                        <rect fill="#FE5E33" x="1200" y="1100" width="200" height="200"></rect>
                        <rect fill="#FFC641" x="400" y="700" width="200" height="200"></rect>
                        <path
                            d="M400,900 L600,900 L600,1000 C600,1055.22847 555.228475,1100 500,1100 C444.771525,1100 400,1055.22847 400,1000 L400,900 Z"
                            fill="#FFC641"></path>
                        <path
                            d="M800,0 C800,55.228475 755.228475,100 700,100 C700,44.771525 744.771525,0 800,0 Z M600,200 C600,144.771525 644.771525,100 700,100 C700,155.228475 655.228475,200 600,200 Z M700,100 C644.771525,100 600,55.228475 600,0 C655.228475,0 700,44.771525 700,100 Z M700,100 C755.228475,100 800,144.771525 800,200 C744.771525,200 700,155.228475 700,100 Z"
                            fill="#06818E"></path>
                        <rect fill="#FE5E33" x="1200" y="500" width="200" height="200"></rect>
                        <rect fill="#111747" x="0" y="1100" width="200" height="200"></rect>
                        <rect fill="#FE5E33" x="1200" y="100" width="200" height="200"></rect>
                        <rect fill="#16A3B2" x="0" y="300" width="200" height="200"></rect>
                        <rect fill="#16A3B2" x="1400" y="500" width="200" height="200"></rect>
                        <rect fill="#06818E" x="1000" y="100" width="200" height="200"></rect>
                        <rect fill="#FE5E33" x="0" y="700" width="200" height="200"></rect>
                        <rect fill="#FE5E33" x="1200" y="700" width="200" height="200"></rect>
                        <path
                            d="M1200,700 L1300,700 C1355.22847,700 1400,744.771525 1400,800 C1400,855.228475 1355.22847,900 1300,900 C1244.77153,900 1200,855.228475 1200,800 L1200,700 Z"
                            fill="#111747"></path>
                        <path
                            d="M1200,700 C1144.77153,700 1100,655.228475 1100,600 C1100,544.771525 1144.77153,500 1200,500 L1200,700 Z"
                            fill="#16A3B2"></path>
                        <path
                            d="M1200,700 L1200,500 C1255.22847,500 1300,544.771525 1300,600 C1300,655.228475 1255.22847,700 1200,700 Z"
                            fill="#16A3B2"></path>
                        <path
                            d="M1400,900 L1500,900 C1555.22847,900 1600,944.771525 1600,1000 C1600,1055.22847 1555.22847,1100 1500,1100 L1400,1100 L1400,900 Z"
                            fill="#16A3B2"></path>
                        <path
                            d="M1400,1100 C1344.77153,1100 1300,1055.22847 1300,1000 C1300,944.771525 1344.77153,900 1400,900 L1400,1100 Z"
                            fill="#16A3B2"></path>
                        <rect fill="#FF87A2" x="0" y="500" width="200" height="200"></rect>
                        <rect fill="#FFC641" x="1000" y="900" width="200" height="200"></rect>
                        <rect fill="#FF87A2" x="1400" y="700" width="200" height="200"></rect>
                        <path
                            d="M1100,700 L1200,700 L1200,900 L1100,900 C1044.77153,900 1000,855.228475 1000,800 C1000,744.771525 1044.77153,700 1100,700 Z"
                            fill="#FF87A2"></path>
                        <path
                            d="M200,500 L400,500 C400,555.228475 355.228475,600 300,600 C244.771525,600 200,555.228475 200,500 Z"
                            fill="#FF87A2"></path>
                        <path
                            d="M800,500 L1000,500 C1000,555.228475 955.228475,600 900,600 C844.771525,600 800,555.228475 800,500 Z"
                            fill="#FE5E33"></path>
                        <rect fill="#FF87A2" x="200" y="300" width="200" height="200"></rect>
                        <path
                            d="M400,300 L200,300 C200,244.771525 244.771525,200 300,200 C355.228475,200 400,244.771525 400,300 Z"
                            fill="#FF87A2"></path>
                        <path d="M400,100 C400,155.228475 355.228475,200 300,200 C300,144.771525 344.771525,100 400,100 Z"
                            fill="#06818E"></path>
                        <path d="M200,300 C200,244.771525 244.771525,200 300,200 C300,255.228475 255.228475,300 200,300 Z"
                            fill="#111747"></path>
                        <path
                            d="M350,486.576894 C320.109931,469.286423 300,436.969232 300,399.955114 C300,362.940996 320.109931,330.623804 350,313.333333 C379.890069,330.623804 400,362.940996 400,399.955114 C400,436.969232 379.890069,469.286423 350,486.576894 L350,486.576894 Z"
                            fill="#FFFFFF"></path>
                        <path d="M800,300 C800,355.228475 755.228475,400 700,400 C700,344.771525 744.771525,300 800,300 Z"
                            fill="#111747"></path>
                        <path
                            d="M1000,500 C1055.22847,500 1100,544.771525 1100,600 C1044.77153,600 1000,555.228475 1000,500 Z"
                            fill="#16A3B2"></path>
                        <path
                            d="M1400,700 C1400,755.228475 1355.22847,800 1300,800 C1300,744.771525 1344.77153,700 1400,700 Z"
                            fill="#FFC641"></path>
                        <path d="M200,300 C200,355.228475 155.228475,400 100,400 C100,344.771525 144.771525,300 200,300 Z"
                            fill="#FFC641"></path>
                        <path
                            d="M200,900 L200,700 C255.228475,700 300,744.771525 300,800 C300,855.228475 255.228475,900 200,900 Z"
                            fill="#FE5E33"></path>
                        <path d="M0,900 C0,844.771525 44.771525,800 100,800 C100,855.228475 55.228475,900 0,900 Z"
                            fill="#16A3B2"></path>
                        <rect fill="#06818E" x="0" y="100" width="200" height="200"></rect>
                        <path
                            d="M1186.57689,350 C1169.28642,379.890069 1136.96923,400 1099.95511,400 C1062.941,400 1030.6238,379.890069 1013.33333,350 C1030.6238,320.109931 1062.941,300 1099.95511,300 C1136.96923,300 1169.28642,320.109931 1186.57689,350 L1186.57689,350 Z"
                            fill="#16A3B2"></path>
                        <path d="M0,500 C0,444.771525 44.771525,400 100,400 C100,455.228475 55.228475,500 0,500 Z"
                            fill="#06818E"></path>
                        <path d="M600,700 C600,644.771525 644.771525,600 700,600 C700,655.228475 655.228475,700 600,700 Z"
                            fill="#FFFFFF"></path>
                        <path
                            d="M150,1086.57689 C120.109931,1069.28642 100,1036.96923 100,999.955114 C100,962.940996 120.109931,930.623804 150,913.333333 C179.890069,930.623804 200,962.940996 200,999.955114 C200,1036.96923 179.890069,1069.28642 150,1086.57689 L150,1086.57689 Z M50,1086.57689 C20.1099315,1069.28642 0,1036.96923 0,999.955114 C0,962.940996 20.1099315,930.623804 50,913.333333 C79.8900685,930.623804 100,962.940996 100,999.955114 C100,1036.96923 79.8900685,1069.28642 50,1086.57689 L50,1086.57689 Z"
                            fill="#16A3B2"></path>
                        <path
                            d="M950,1086.57689 C920.109931,1069.28642 900,1036.96923 900,999.955114 C900,962.940996 920.109931,930.623804 950,913.333333 C979.890069,930.623804 1000,962.940996 1000,999.955114 C1000,1036.96923 979.890069,1069.28642 950,1086.57689 L950,1086.57689 Z"
                            fill="#111747"></path>
                        <rect fill="#111747" x="1400" y="500" width="200" height="200"></rect>
                        <rect fill="#16A3B2" x="400" y="900" width="200" height="200"></rect>
                        <rect fill="#FFFFFF" x="300" y="800" width="200" height="200"></rect>
                        <rect fill="#FE5E33" x="400" y="700" width="200" height="200"></rect>
                        <path
                            d="M1500,550 C1527.61424,550 1550,572.385763 1550,600 C1550,627.614237 1527.61424,650 1500,650 C1472.38576,650 1450,627.614237 1450,600 C1450,572.385763 1472.38576,550 1500,550 Z"
                            fill="#FFC641"></path>
                        <path
                            d="M500,550 C527.614237,550 550,572.385763 550,600 C550,627.614237 527.614237,650 500,650 C472.385763,650 450,627.614237 450,600 C450,572.385763 472.385763,550 500,550 Z"
                            fill="#FFC641"></path>
                        <path
                            d="M100,550 C127.614237,550 150,572.385763 150,600 C150,627.614237 127.614237,650 100,650 C72.3857625,650 50,627.614237 50,600 C50,572.385763 72.3857625,550 100,550 Z"
                            fill="#111747"></path>
                        <path
                            d="M700,950 C727.614237,950 750,972.385763 750,1000 C750,1027.61424 727.614237,1050 700,1050 C672.385763,1050 650,1027.61424 650,1000 C650,972.385763 672.385763,950 700,950 Z"
                            fill="#FE5E33"></path>
                        <path
                            d="M900,750 C927.614237,750 950,772.385763 950,800 C950,827.614237 927.614237,850 900,850 C872.385763,850 850,827.614237 850,800 C850,772.385763 872.385763,750 900,750 Z"
                            fill="#FE5E33"></path>
                        <path
                            d="M300,950 C327.614237,950 350,972.385763 350,1000 C350,1027.61424 327.614237,1050 300,1050 C272.385763,1050 250,1027.61424 250,1000 C250,972.385763 272.385763,950 300,950 Z"
                            fill="#16A3B2"></path>
                        <path
                            d="M1100,750 C1127.61424,750 1150,772.385763 1150,800 C1150,827.614237 1127.61424,850 1100,850 C1072.38576,850 1050,827.614237 1050,800 C1050,772.385763 1072.38576,750 1100,750 Z"
                            fill="#16A3B2"></path>
                        <path
                            d="M100,950 C127.614237,950 150,972.385763 150,1000 C150,1027.61424 127.614237,1050 100,1050 C72.3857625,1050 50,1027.61424 50,1000 C50,972.385763 72.3857625,950 100,950 Z"
                            fill="#FE5E33"></path>
                        <path
                            d="M900,350 C927.614237,350 950,372.385763 950,400 C950,427.614237 927.614237,450 900,450 C872.385763,450 850,427.614237 850,400 C850,372.385763 872.385763,350 900,350 Z"
                            fill="#FFC641"></path>
                        <path
                            d="M300,750 C327.614237,750 350,772.385763 350,800 C350,827.614237 327.614237,850 300,850 C272.385763,850 250,827.614237 250,800 C250,772.385763 272.385763,750 300,750 Z"
                            fill="#111747"></path>
                        <path
                            d="M700,450 C727.614237,450 750,472.385763 750,500 C750,527.614237 727.614237,550 700,550 C672.385763,550 650,527.614237 650,500 C650,472.385763 672.385763,450 700,450 Z"
                            fill="#FE5E33"></path>
                        <path
                            d="M1500,950 C1527.61424,950 1550,972.385763 1550,1000 C1550,1027.61424 1527.61424,1050 1500,1050 C1472.38576,1050 1450,1027.61424 1450,1000 C1450,972.385763 1472.38576,950 1500,950 Z"
                            fill="#FE5E33"></path>
                        <path
                            d="M1400,200 C1400,255.228475 1355.22847,300 1300,300 C1300,244.771525 1344.77153,200 1400,200 Z M1200,400 C1200,344.771525 1244.77153,300 1300,300 C1300,355.228475 1255.22847,400 1200,400 Z M1300,300 C1244.77153,300 1200,255.228475 1200,200 C1255.22847,200 1300,244.771525 1300,300 Z M1300,300 C1355.22847,300 1400,344.771525 1400,400 C1344.77153,400 1300,355.228475 1300,300 Z"
                            fill="#111747"></path>
                        <path
                            d="M1100,1200 C1100,1144.77153 1144.77153,1100 1200,1100 C1200,1155.22847 1155.22847,1200 1100,1200 Z"
                            fill="#111747"></path>
                        <path
                            d="M400,100 L600,100 L600,200 C600,255.228475 555.228475,300 500,300 C444.771525,300 400,255.228475 400,200 L400,100 Z"
                            fill="#06818E"></path>
                        <path d="M500,200 C500,144.771525 544.771525,100 600,100 C600,155.228475 555.228475,200 500,200 Z"
                            fill="#FE5E33"></path>
                        <rect fill="#111747" x="200" y="1100" width="200" height="200"></rect>
                        <path
                            d="M400,1100 L200,1100 C200,1044.77153 244.771525,1000 300,1000 C355.228475,1000 400,1044.77153 400,1100 Z"
                            fill="#FE5E33"></path>
                        <path
                            d="M1500,100 L1600,100 L1600,300 L1500,300 C1444.77153,300 1400,255.228475 1400,200 C1400,144.771525 1444.77153,100 1500,100 Z"
                            fill="#111747"></path>
                        <path
                            d="M1500,150 C1527.61424,150 1550,172.385763 1550,200 C1550,227.614237 1527.61424,250 1500,250 C1472.38576,250 1450,227.614237 1450,200 C1450,172.385763 1472.38576,150 1500,150 Z"
                            fill="#FFFFFF"></path>
                        <path
                            d="M100,1200 C100,1144.77153 144.771525,1100 200,1100 C200,1155.22847 155.228475,1200 100,1200 Z"
                            fill="#16A3B2"></path>
                        <path
                            d="M1600,1100 C1600,1155.22847 1555.22847,1200 1500,1200 C1500,1144.77153 1544.77153,1100 1600,1100 Z M1400,1300 C1400,1244.77153 1444.77153,1200 1500,1200 C1500,1255.22847 1455.22847,1300 1400,1300 Z M1500,1200 C1444.77153,1200 1400,1155.22847 1400,1100 C1455.22847,1100 1500,1144.77153 1500,1200 Z M1500,1200 C1555.22847,1200 1600,1244.77153 1600,1300 C1544.77153,1300 1500,1255.22847 1500,1200 Z"
                            fill="#16A3B2"></path>
                        <path
                            d="M1586.57689,350 C1569.28642,379.890069 1536.96923,400 1499.95511,400 C1462.941,400 1430.6238,379.890069 1413.33333,350 C1430.6238,320.109931 1462.941,300 1499.95511,300 C1536.96923,300 1569.28642,320.109931 1586.57689,350 L1586.57689,350 Z"
                            fill="#FFC641"></path>
                        <path d="M900,800 C900,855.228475 855.228475,900 800,900 C800,844.771525 844.771525,800 900,800 Z"
                            fill="#06818E"></path>
                        <path
                            d="M200,0 C200,55.228475 155.228475,100 100,100 C100,44.771525 144.771525,0 200,0 Z M0,200 C0,144.771525 44.771525,100 100,100 C100,155.228475 55.228475,200 0,200 Z M100,100 C44.771525,100 0,55.228475 0,0 C55.228475,0 100,44.771525 100,100 Z M100,100 C155.228475,100 200,144.771525 200,200 C144.771525,200 100,155.228475 100,100 Z"
                            fill="#111747"></path>
                        <path
                            d="M600,800 C600,855.228475 555.228475,900 500,900 C500,844.771525 544.771525,800 600,800 Z M400,1000 C400,944.771525 444.771525,900 500,900 C500,955.228475 455.228475,1000 400,1000 Z M500,900 C444.771525,900 400,855.228475 400,800 C455.228475,800 500,844.771525 500,900 Z M500,900 C555.228475,900 600,944.771525 600,1000 C544.771525,1000 500,955.228475 500,900 Z"
                            fill="#16A3B2"></path>
                    </g>
                </g>
            </g>
        </svg>
    </div>
@endsection

@push('css')
    <style>
        body {
            background-image: linear-gradient( 92.7deg,  rgba(245,212,212,1) 8.5%, rgba(252,251,224,1) 90.2% );
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
            height: 800px;
            box-shadow: inset 5px 5px 5px rgba(0, 0, 0, 0.05),
                inset -5px -5px 5px rgba(255, 255, 255, 0.5),
                5px 5px 5px rgba(0, 0, 0, 0.05),
                -5px -5px 5px rgba(255, 255, 255, 0.5);
            border-radius: 15px;
            background-image: radial-gradient( circle farthest-corner at 10.2% 55.8%,  rgba(252,37,103,1) 0%, rgba(250,38,151,1) 46.2%, rgba(186,8,181,1) 90.1% );
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

        .containers .card .box .contents img {
            position: absolute;
            top: 60px;
            left: 80px;
            width: 200px;
            height: 200px;
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

        .alert {
            background: #ffdb9b;
            padding: 20px 40px;
            min-width: 420px;
            position: absolute;
            overflow: hidden;
            right: 0px;
            top: 80px;
            border-radius: 4px;
            border-left: 8px solid #ffa502;
        }

        .alert.show {
            animation: show_slide 1s ease forwards;
        }

        @keyframes show_slide {
            0% {
                transform: translateX(100%);
            }

            40% {
                transform: translateX(-10%);
            }

            80% {
                transform: translateX(0%);
            }

            100% {
                transform: translateX(-10px);
            }
        }

        .alert .fa-exclamation-circle {
            position: absolute;
            left: 20px;
            top: 50%;
            transform: translateY(-50%);
            color: #ce8500;
            font-size: 30px;
        }

        .alert .msg-text {
            padding: 0 20px;
            font-size: 18px;
            color: #ce8500;
        }

        .alert .close-btn {
            position: absolute;
            right: 0px;
            top: 50%;
            transform: translateY(-50%);
            background: #ffd080;
            padding: 32px 18px;
            cursor: pointer;
        }

        .close-btn:hover {
            background: #ffc766;
        }
    </style>
@endpush

@push('js')
    <script>
        function busEditModal(bus_id) {
            var data = {
                bus_id: bus_id,
            };
            $.ajax({
                url: "{{ route('bustimeview.edit') }}",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'GET',
                dataType: '',
                data: data,
                success: function(response) {
                    $('#busEdit').modal('show');
                    $('#busEditContent').html(response);
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
                var bus_id = $(this).closest("div").find('.serDel_val').val();
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
                                "id": bus_id,
                            };
                            $.ajax({
                                url: '/bustimeview/' + bus_id + '/delete/',
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
