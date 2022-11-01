@extends('layouts.app')

@section('content')
    <div class="logo">
        <img src="logo.png" alt="logo" />
    </div>
    <div class="col-md-12 text-center">
        <h1 class="page-title">Finance Details</h1>
    </div>
@endsection

@push('css')
    <style>
        body {
            background-image: linear-gradient(92.7deg, rgba(245, 212, 212, 1) 8.5%, rgba(252, 251, 224, 1) 90.2%);
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
    </style>
@endpush