@extends('layouts.home')

@section('content')
    <div class="card">
        <div class="contents">
            <div class="imgBx">
                <img src="logo-card.jpg" alt="logo" />
            </div>
            <div class="bar-code">
                <img src="bar.png"/>
            </div>
        </div>
        <div class="details">
            <h3>Transport for Sri Lanka</h3>
            <h4>Issued subject to conditions - see over</h4>
        </div>
    </div>
    
@endsection

@push('css')
    <style>
        body {
            background: url(card-back.jpg);
            background-size: cover;
            background-position: center;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card {
            position: relative;
            width: 700px;
            height: 400px;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            box-shadow: 0 25px 25px rgba(0, 0, 0, 0.1);
            border-radius: 20px;
            overflow: hidden;
            border-top: 1px solid rgba(255, 255, 255, 0.5);
            transition: 0.5s;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card:hover {
            transform: scale(1.2);
            background: rgba(255, 255, 255, 0.2);
        }

        .card::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 80px;
            background: #000080;
        }

        .card .contents {
            position: relative;
            display: flex;
            margin-top: -80px;
        }

        .card .contents .imgBx {
            position: relative;
            width: 160px;
            height: 120px;
            padding-bottom: 20px;
            margin-right: 300px;
            overflow: hidden;
            border-radius: 50%;
            box-shadow: 0 0 0 10px rgba(255, 255, 255, 0.1);
        }

        .card .contents .imgBx img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .card .contents .bar-code {
            position: relative;
            width: 100px;
            height: 100px;
            overflow: hidden;
            box-shadow: 0 0 0 10px rgba(255, 255, 255, 0.1);
        }

        .card .contents .bar-code img {
            position: absolute;
            top: 0;
            right: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .details {
            display: flex;
            flex-direction: column;
            padding-top: 70px;
            margin-right: 280px;
            transition: 1s;
        }

        .details h3 {
            font-weight: 600;
            font-size: 30px;
            color: #fff;
        }

        .details h4 {
            font-size: 15px;
            color: #000080;
        }
    </style>
@endpush
