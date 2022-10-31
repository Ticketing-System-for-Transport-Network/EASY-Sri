@extends('layouts.app')

@section('content')
    <div class="logo">
        <img src="logo.png" alt="logo" />
    </div>
    <div class="col-md-12 text-center">
        <h1 class="page-title">Invalid Card Details</h1>
    </div>
    <div class="container">
        <form class="from-content">
            <div class="row justify-content-evenly">
                <div class="form-group">
                    <input type="search" name="search" class="form-control form-control-lg" placeholder="Search Card Number..." />
                </div>
            </div>
            <div class="btn-group">
                <div class="col-7">
                    <button class="btn btn-warning btn-lg">Search</button>
                </div>
                <div class="col-7">
                    <a href="{{ route('crowdview') }}">
                        <button class="btn btn-warning btn-lg" type="button">Reset</button>
                    </a>
                </div>
            </div>
        </form>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">
                        <h1>Card No</h1>
                    </th>
                    <th scope="col">
                        <h1 style="color: #ffa502;">Cardholder Name</h1>
                    </th>
                    <th scope="col">
                        <h1>Route No</h1>
                    </th>
                    <th scope="col">
                        <h1 style="color: #ffa502;">Arrival</h1>
                    </th>
                    <th scope="col">
                        <h1>Date</h1>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">
                        <h3>C435</h3>
                    </th>
                    <td>
                        <h3>Colombo</h3>
                    </td>
                    <td>
                        <h3>Malabe</h3>
                    </td>
                    <td>
                        <h3>2022/08/25</h3>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <h3>C435</h3>
                    </th>
                    <td>
                        <h3>Colombo</h3>
                    </td>
                    <td>
                        <h3>Malabe</h3>
                    </td>
                    <td>
                        <h3>2022/08/23</h3>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <h3>R045</h3>
                    </th>
                    <td>
                        <h3>Rathnapura</h3>
                    </td>
                    <td>
                        <h3>Avissawella</h3>
                    </td>
                    <td>
                        <h3>2022/08/25</h3>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <h3>A099</h3>
                    </th>
                    <td>
                        <h3>Colombo</h3>
                    </td>
                    <td>
                        <h3>Kandy</h3>
                    </td>
                    <td>
                        <h3>2022/08/22</h3>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <h3>B123</h3>
                    </th>
                    <td>
                        <h3>Kaduwela</h3>
                    </td>
                    <td>
                        <h3>Kollupitiya</h3>
                    </td>
                    <td>
                        <h3>2022/08/23</h3>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <h3>R055</h3>
                    </th>
                    <td>
                        <h3>Rathnapura</h3>
                    </td>
                    <td>
                        <h3>Kuruwita</h3>
                    </td>
                    <td>
                        <h3>2022/08/25</h3>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <h3>A101</h3>
                    </th>
                    <td>
                        <h3>Galle</h3>
                    </td>
                    <td>
                        <h3>Matara</h3>
                    </td>
                    <td>
                        <h3>2022/08/20</h3>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <h3>C001</h3>
                    </th>
                    <td>
                        <h3>Kuruwita</h3>
                    </td>
                    <td>
                        <h3>Hidellana</h3>
                    </td>
                    <td>
                        <h3>2022/08/24</h3>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <h3>435</h3>
                    </th>
                    <td>
                        <h3>Colombo</h3>
                    </td>
                    <td>
                        <h3>Malabe</h3>
                    </td>
                    <td>
                        <h3>2022/08/25</h3>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <h3>R435</h3>
                    </th>
                    <td>
                        <h3>Colombo</h3>
                    </td>
                    <td>
                        <h3>Panadura</h3>
                    </td>
                    <td>
                        <h3>2022/08/25</h3>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="text-button">
        <a title="Redirects to admin dashboard interface." href="{{ route('admindashboard') }}">
            << Go to dashboard</a>
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

        .containers {
            padding-bottom: 6vh;
        }

        .from-content {
            display: flex;
            padding-top: 10vh;
            margin-left: 40vh;
            padding-bottom: 10vh;
        }

        .form-group {
            display: flex;
            height: 50px;
        }

        .form-group input {
            width: 45vh;
            background-color: #fff;
            border: 1px solid #000;
        }

        .btn-group {
            margin-left: 100px;
        }

        .text-button a {
            font-size: 1.8em;
            color: #000;
            text-decoration: none;
            font-style: italic;
            margin-left: 120px
        }
    </style>
@endpush
