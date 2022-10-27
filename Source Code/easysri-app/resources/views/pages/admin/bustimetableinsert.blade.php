@extends('layouts.app')

@section('content')
    <div class="logo">
        <img src="logo.png" alt="logo" />
    </div>
    <form method="post" action="#" role="form">
        {{ csrf_field() }}
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-title">BUS TIMETABLE DETAILS</h1>
                </div>
                <div class="img-busTime">

                </div>
            </div>
            <section>
                <div class="form-group">
                    <div class="mb-5">
                        <label for="exampleFormControlInput1" class="form-label">Route No</label>
                        <input title="This includes relevant route numbers for the destination." type="text"
                            class="form-control form-control-lg" id="exampleFormControlInput1" name=""
                            placeholder="Enter the route no here (e.g.'A90')">
                        <br>
                        <div class="text-danger"></div>
                    </div>
                    <div class="row justify-content-around">
                        <div class="col-lg-6">
                            <div class="mb-5">
                                <label for="exampleFormControlInput1" class="form-label">Departure</label>
                                <select title="Select the departure place of the respective buses from the drop-down list."
                                    class="form-select form-select-lg mb-3" name="">
                                    <option value="">Open this departure place select menu</option>
                                    <option value="Jaffna">Jaffna</option>
                                    <option value="Kilinochchi">Kilinochchi</option>
                                    <option value="Mannar">Mannar</option>
                                    <option value="Mullaitivu">Mullaitivu</option>
                                    <option value="Vavuniya">Vavuniya</option>
                                    <option value="Puttalam">Puttalam</option>
                                    <option value="Kurunegala">Kurunegala</option>
                                    <option value="Gampaha">Gampaha</option>
                                    <option value="Colombo">Colombo</option>
                                    <option value="Kalutara">Kalutara</option>
                                    <option value="Anuradhapura">Anuradhapura</option>
                                    <option value="Polonnaruwa">Polonnaruwa</option>
                                    <option value="Matale">Matale</option>
                                    <option value="Kandy">Kandy</option>
                                    <option value="Nuwara Eliya">Nuwara Eliya</option>
                                    <option value="Kegalle">Kegalle</option>
                                    <option value="Ratnapura">Ratnapura</option>
                                    <option value="Trincomalee">Trincomalee</option>
                                    <option value="Batticaloa">Batticaloa</option>
                                    <option value="Ampara">Ampara</option>
                                    <option value="Badulla">Badulla</option>
                                    <option value="Monaragala">Monaragala</option>
                                    <option value="Hambantota">Hambantota</option>
                                    <option value="Matara">Matara</option>
                                    <option value="Galle">Galle</option>
                                </select>
                                <br>
                                <div class="text-danger"></div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-5">
                                <label for="exampleFormControlInput1" class="form-label">Departure Time</label>
                                <input title="This includes the departure time of the bus related to the timetable."
                                    type="time" class="form-control form-control-lg" id="exampleFormControlInput1"
                                    name="" placeholder="Enter the departure time here (e.g. 7.00 AM)">
                                <br>
                                <div class="text-danger"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-around">
                        <div class="col-lg-6">
                            <div class="mb-5">
                                <label for="exampleFormControlInput1" class="form-label">Arrival</label>
                                <select title="Select the arrival place of the respective buses from the drop-down list."
                                    class="form-select form-select-lg mb-3" name="">
                                    <option value="">Open this arrival place select menu</option>
                                    <option value="Jaffna">Jaffna</option>
                                    <option value="Kilinochchi">Kilinochchi</option>
                                    <option value="Mannar">Mannar</option>
                                    <option value="Mullaitivu">Mullaitivu</option>
                                    <option value="Vavuniya">Vavuniya</option>
                                    <option value="Puttalam">Puttalam</option>
                                    <option value="Kurunegala">Kurunegala</option>
                                    <option value="Gampaha">Gampaha</option>
                                    <option value="Colombo">Colombo</option>
                                    <option value="Kalutara">Kalutara</option>
                                    <option value="Anuradhapura">Anuradhapura</option>
                                    <option value="Polonnaruwa">Polonnaruwa</option>
                                    <option value="Matale">Matale</option>
                                    <option value="Kandy">Kandy</option>
                                    <option value="Nuwara Eliya">Nuwara Eliya</option>
                                    <option value="Kegalle">Kegalle</option>
                                    <option value="Ratnapura">Ratnapura</option>
                                    <option value="Trincomalee">Trincomalee</option>
                                    <option value="Batticaloa">Batticaloa</option>
                                    <option value="Ampara">Ampara</option>
                                    <option value="Badulla">Badulla</option>
                                    <option value="Monaragala">Monaragala</option>
                                    <option value="Hambantota">Hambantota</option>
                                    <option value="Matara">Matara</option>
                                    <option value="Galle">Galle</option>
                                </select>
                                <br>
                                <div class="text-danger"></div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-5">
                                <label for="exampleFormControlInput1" class="form-label">Arrival Time</label>
                                <input title="This includes the arrival time of the bus related to the timetable."
                                    type="time" class="form-control form-control-lg" id="exampleFormControlInput1"
                                    name="" placeholder="Enter the arrival time here (e.g. 7.00 AM)">
                                <br>
                                <div class="text-danger"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-around">
                        <div class="col-lg-6">
                            <div class="mb-5">
                                <label for="exampleFormControlInput1" class="form-label">Distance (KM)</label>
                                <input title="This includes the distance of the destination related to the timetable."
                                    type="text" class="form-control form-control-lg" id="exampleFormControlInput1"
                                    name="" placeholder="Enter the distance here (e.g. 10)">
                                <br>
                                <div class="text-danger"></div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-5">
                                <label for="exampleFormControlInput1" class="form-label">Time Taken (Minutes)</label>
                                <input title="This includes the time taken to the destination related to the timetable."
                                    type="text" class="form-control form-control-lg" id="exampleFormControlInput1"
                                    name="" placeholder="Enter the time taken here (e.g. 10)">
                                <br>
                                <div class="text-danger"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-around">
                        <div class="col-lg-4">
                            <div class="mb-5">
                                <label for="exampleFormControlInput1" class="form-label">Bus Type</label>
                                <select title="Select the bus type from the drop-down list."
                                    class="form-select form-select-lg mb-3" name="">
                                    <option value="">Open this bus type select menu</option>
                                    <option value="CTB" style="color: red;">CTB</option>
                                    <option value="PVT" style="color: #FFA500;">PVT</option>
                                </select>
                                <br>
                                <div class="text-danger"></div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="mb-5">
                                <label for="exampleFormControlInput1" class="form-label">Service Type</label>
                                <select title="Select the service bus type from the drop-down list."
                                    class="form-select form-select-lg mb-3" name="">
                                    <option value="">Open this service type select menu</option>
                                    <option value="Normal Service" style="color: #FFA500;">Normal Service (Normal Fare)</option>
                                    <option value="Semi Luxury Service" style="color: #FFA500;">Semi Luxury Service (Normal Fare*1.5)</option>
                                    <option value="Luxury/AC Service" style="color: #FFA500;">Luxury/AC Service (Normal Fare*2)</option>
                                    <option value="Super Luxury Service" style="color: #FFA500;">Super Luxury Service (Normal Fare*3)</option>
                                </select>
                                <br>
                                <div class="text-danger"></div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="mb-5">
                                <label for="exampleFormControlInput1" class="form-label">No Of Buses</label>
                                <input title="This includes the no of buses related to the timetable." type="text"
                                    class="form-control form-control-lg" id="exampleFormControlInput1" name=""
                                    placeholder="Enter the no of buses here (e.g. 15)">
                                <br>
                                <div class="text-danger"></div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-5">
                        <label for="exampleFormControlInput1" class="form-label">Minimum Charge Per Kilometre (RS)</label>
                        <input title="This includes the minimum charge per kilometre related to the destination." type="text"
                            class="form-control form-control-lg" id="exampleFormControlInput1" name=""
                            placeholder="Enter the minimum charge per kilometre here (e.g. 40)">
                        <br>
                        <div class="text-danger"></div>
                    </div>
                </div>
            </section>
        </div>
        <div class="col-md-12 text-center">
            <div class="btn-group">
                <p><input type="submit" title="Click this button to save the entered data."
                        class="btn btn-warning btn-lg" value="ADD DETAILS">
                    <a title="Click this button to view the entered data." class="btn btn-warning btn-lg btn-block"
                        href="#" role="button">VIEW
                        DETAILS</a>
                </p>
            </div>
        </div>
    </form>
    <div class="text-button">
        <a title="Redirects to admin dashboard interface." href="{{ route('admindashboard') }}">
            << Go to functions</a>
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

        .form-group {
            padding-top: 2vh;
        }

        label {
            color: #000;
            font-size: 35px;
            font-weight: 500;
        }

        h5 {
            text-align: center;
            font-size: 35px;
            color: #0f0;
        }

        .text-button {
            margin-left: 100px;
        }

        .text-button a {
            font-size: 1.8em;
            color: #000;
            text-decoration: none;
            font-style: italic;
        }
    </style>
@endpush
