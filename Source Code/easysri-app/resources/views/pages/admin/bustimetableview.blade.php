@extends('layouts.app')

@section('content')
    <div class="logo">
        <img src="logo.png" alt="logo" />
    </div>
    <div class="body-card">
        <div class="containers">
            <div class="card">
                <div class="box">
                    <div class="contents">
                        <h2>01</h2>
                        <h3>Card One</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            the
                            industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
                            type
                            and scrambled it to make a type specimen book. It has survived not only five centuries, but also
                            the
                            leap into electronic typesetting, remaining essentially unchanged. It was popularised in the
                            1960s
                            with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with
                            desktop
                            publishing software like Aldus PageMaker including versions of Lorem Ipsum.P</p>
                        <a href="#">Active</a>
                        <a href="#">Delete</a>
                        <a href="#">Publish</a>
                        <a href="#">Edit</a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="box">
                    <div class="contents">
                        <h2>02</h2>
                        <h3>Card Two</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            the
                            industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
                            type
                            and scrambled it to make a type specimen book. It has survived not only five centuries, but also
                            the
                            leap into electronic typesetting, remaining essentially unchanged. It was popularised in the
                            1960s
                            with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with
                            desktop
                            publishing software like Aldus PageMaker including versions of Lorem Ipsum.P</p>
                        <a href="#">Active</a>
                        <a href="#">Delete</a>
                        <a href="#">Publish</a>
                        <a href="#">Edit</a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="box">
                    <div class="contents">
                        <h2>03</h2>
                        <h3>Card Three</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            the
                            industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
                            type
                            and scrambled it to make a type specimen book. It has survived not only five centuries, but also
                            the
                            leap into electronic typesetting, remaining essentially unchanged. It was popularised in the
                            1960s
                            with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with
                            desktop
                            publishing software like Aldus PageMaker including versions of Lorem Ipsum.P</p>
                        <a href="#">Active</a>
                        <a href="#">Delete</a>
                        <a href="#">Publish</a>
                        <a href="#">Edit</a>
                    </div>
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
            width: 500px;
            height: 600px;
            box-shadow: inset 5px 5px 5px rgba(0,0,0,0.05),
                        inset -5px -5px 5px rgba(255,255,255,0.5),
                        5px 5px 5px rgba(0,0,0,0.05),
                        -5px -5px 5px rgba(255,255,255,0.5);
            border-radius: 15px;
            margin: 50px;
        }

        .containers .card .box {
            position: absolute;
            top: 20px;
            left: 20px;
            right: 20px;
            bottom: 20px;
            background-image: linear-gradient( 174.2deg,  rgba(255,244,228,1) 7.1%, rgba(240,246,238,1) 67.4% );
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
            border-radius: 15px;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: 0.5s;
        }

        .containers .card:hover .box {
            transform: translateY(-50px);
            box-shadow: 0 10px 40px rgba(0,0,0,0.2);
            background-image: radial-gradient( circle farthest-corner at 10% 20%,  rgba(255,209,67,1) 0%, rgba(255,145,83,1) 90% );)
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
            color: rgba(0,0,0,0.02);
            transition: 0.5s;
            pointer-events: none;
        }

        .containers .card:hover .box .contents h2 {
            color: rgba(0,0,0,0.05);
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
            box-shadow: 0 10px 20px rgba(0,0,0,0.2);
        }

        .containers .card:hover .box .contents a {
            background: #505050;
        }
    </style>
@endpush
