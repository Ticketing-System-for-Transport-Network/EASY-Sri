@extends('layouts.app')

@section('content')
    <div class="logo">
        <img src="logo.png" alt="logo" />
    </div>
    <h1>Admin Dashboard</h1>
    <div class="body-container">
        <div class="containers">
            <div class="card">
                <div class="imgBx" data-text="Plan">
                    <i class="fa fa-calendar" aria-hidden="true"></i>
                </div>
                <div class="contents">
                    <div>
                        <h3>Plan Timetable</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            the
                            industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
                            type
                            and scrambled it to make a type specimen book.</p>
                        <a href="{{ route('bustimeinsert') }}">Read More</a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="imgBx" data-text="View">
                    <i class="fa fa-street-view" aria-hidden="true"></i>
                </div>
                <div class="contents">
                    <div>
                        <h3>Overcrowd Networks</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            the
                            industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
                            type
                            and scrambled it to make a type specimen book.</p>
                        <a href="{{ route('crowdview') }}">Read More</a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="imgBx" data-text="Calculate">
                    <i class="fa fa-money" aria-hidden="true"></i>
                </div>
                <div class="contents">
                    <div>
                        <h3>Finance Info</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            the
                            industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
                            type
                            and scrambled it to make a type specimen book.</p>
                        <a href="{{ route('financeview') }}">Read More</a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="imgBx" data-text="Check">
                    <i class="fa fa-ticket" aria-hidden="true"></i>
                </div>
                <div class="contents">
                    <div>
                        <h3>Invalid Tickets</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            the
                            industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
                            type
                            and scrambled it to make a type specimen book.</p>
                        <a href="{{ route('ticketview') }}">Read More</a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="imgBx" data-text="Generate">
                    <i class="fa fa-line-chart" aria-hidden="true"></i>
                </div>
                <div class="contents">
                    <div>
                        <h3>Daily Report</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            the
                            industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
                            type
                            and scrambled it to make a type specimen book.</p>
                        <a href="{{ route('reportview') }}">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('css')
    <style>

        body {
            background-image: url('bus-back.jpg');
            background-size: 162%;
        }
        img {
            width: 600px;
            height: 500px;
            display: block;
            margin: auto;
            padding: auto;
        }

        h1 {
            text-align: center;
            font-family: 'Metal Lord';
            color: #FFA500;
            font-size: 120px;
            margin-top: -50px;
            padding-bottom: 6px;
        }

        .body-container {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            box-sizing: border-box;
            padding-bottom: 10vh;
        }

        .containers {
            position: relative;
            width: 1300px;
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            margin: 20px;
        }

        .containers .card {
            position: relative;
            height: 350px;
            background: #fff;
            display: flex;
            width: 600px;
            margin: 30px 0;
        }

        .containers .card .imgBx {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #333;
            z-index: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            transition: 0.5s ease-in-out;
        }

        .containers .card .imgBx i {
            color: #fff;
            font-size: 120px;
            transition: 0.5s ease-in-out;
        }

        .containers .card:hover .imgBx i {
            font-size: 75px;
        }

        .containers .card:hover .imgBx {
            width: 150px;
            height: 150px;
            left: -75px;
            top: calc(50% - 75px);
            transition: 0.5s ease-in-out;
            background: #FFA500;
        }

        .containers .card .imgBx:before {
            content: attr(data-text);
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            text-align: center;
            font-size: 6em;
            color: rgba(255, 255, 255, .05);
            font-weight: 700;
        }

        .containers .card .contents {
            position: absolute;
            right: 0;
            width: calc(100% - 75px);
            height: 100%;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .containers .card .contents h3 {
            margin-bottom: 3px;
            font-size: 40px;
        }

        .containers .card .contents p {
            font-size: 20px;
        }

        .containers .card .contents a {
            display: inline-block;
            margin-top: 10px;
            padding: 5px 10px;
            background: #FFA500;
            text-decoration: none;
            color: #fff;
        }

        @media (max-width: 992px) {
            .containers {
                width: 100%;
                flex-direction: column;
                align-items: center;
            }

            .containers .card {
                width: 400px;
            }
        }

        @media (max-width: 768px) {
            .containers .card {
                max-width: 300px;
                flex-direction: column;
                height: auto;
            }

            .containers .card .imgBx {
                position: relative;
            }

            .containers .card .imgBx,
            .containers .card:hover .imgBx {
                width: 100%;
                height: 200px;
                left: 0;
            }

            .containers .card .imgBx,
            .containers .card:hover .imgBx i {
                max-width: 100px;
            }

            .containers .card .contents {
                position: relative;
                width: 100%;
            }
        }
    </style>
@endpush
