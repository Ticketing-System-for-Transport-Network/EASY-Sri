@extends('layouts.app')
@section('content')
    @include('sweetalert::alert')

    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="css/demo.css">

    <div class="hero-image">

        <img src="../logo.png" style="width:600px;height:500px;display:block;margin:auto;padding: auto;" alt="space logo">
        <h1 style="color: #FFA500; text-align:center;font-size:80px">Set Up Your Easy-Sri Account</h1>

        @if ($errors->any())
        @endif
        @if (session('message'))
            <div class="alert show">
                <span class="fas fa-exclamation-circle"></span>
                <span class="msg-text">{{ session('message') }}</span>
                <span class="close-btn">
                </span>
            </div>
        @endif


        <div class="container" style="border:3px solid #5f6064; border-radius: 5px; box-shadow: 5px 10px #888888;">
            <form action="{{ route('storeuserreg') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-6">
                        <div class="space" style="padding-top: 4vh"> </div>
                        <h4 style="text-align:center";>Registration Details</h4>
                        <div class="space" style="padding-top: 3vh"> </div>

                        <div class="row">
                            <div class="form-group col-md-6 mb-3 mt-3">
                                <label for="inputfname">First Name</label>
                                <div class="alert-danger text-danger" style="font-size: 15px">
                                    <small>{{ $errors->first('Fname') }}</small></div>
                                <input type="text" name="Fname" title="Please Enter First Name" class="form-control"
                                    id="inputfname" placeholder="Chandima">
                            </div>
                            <div class="form-group col-md-6 mb-3 mt-3">
                                <label for="inputlname">Last Name</label>
                                <div class="alert-danger text-danger" style="font-size: 15px">
                                    <small>{{ $errors->first('Lname') }}</small></div>
                                <input type="text" name="Lname" title="Please Enter Last Name" class="form-control"
                                    id="inputlname" placeholder="Sooriyaarachchi">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-4 mb-3 mt-3">
                                <label for="inputNIC">NIC Number</label>
                                <div class="alert-danger text-danger" style="font-size: 15px">
                                    <small>{{ $errors->first('NIC') }}</small></div>
                                <input type="text" name="NIC" title="Please Enter NIC Number" class="form-control"
                                    id="inputNIC" placeholder="eg : 99********">
                            </div>
                        </div>
                        <div class="form-group mb-3 mt-3">
                            <label for="inputAddress">Address</label>
                            <div class="alert-danger text-danger" style="font-size: 15px">
                                <small>{{ $errors->first('Address') }}</small></div>
                            <input type="text" name="Address" title="Please Enter Address" class="form-control"
                                id="inputAddress" placeholder="1234 Main St">
                        </div>

                        <div class="row">
                            <div class="form-group col-md-4 mb-3 mt-3">
                                <label for="inputCity">City</label>
                                <div class="alert-danger text-danger" style="font-size: 15px">
                                    <small>{{ $errors->first('City') }}</small></div>
                                <input type="text" name="City" title="Please Enter City" class="form-control"
                                    id="inputCity" placeholder="eg : Kegalle">
                            </div>
                            <div class="form-group col-md-3 me-md-5 mb-3 mt-3">
                                <label for="inputZip">Postal Code</label>
                                <div class="alert-danger text-danger" style="font-size: 15px">
                                    <small>{{ $errors->first('Zipcode') }}</small></div>
                                <input type="text" name="Zipcode" title="Please Enter Postal Code" class="form-control"
                                    id="inputZip" placeholder="eg : 71050">
                            </div>
                            <div class="form-group col-md-4 me-md-2 mb-3 mt-3">
                                <label for="inputMno">Mobile NUmber</label>
                                <div class="alert-danger text-danger" style="font-size: 15px">
                                    <small>{{ $errors->first('MobNo') }}</small></div>
                                <input type="text" name="MobNo" title="Please Enter Mobile NUmber" class="form-control"
                                    id="inputMno" placeholder="eg : 0700000000">
                            </div>
                        </div>

                        <div class="space" style="padding-top: 3vh"> </div>

                    </div>
                    <div class="col-6">
                        <div class="space" style="padding-top: 4vh"> </div>
                        <h4 style="text-align:center";>Payment Details</h4>
                        <div class="space" style="padding-top: 3vh"> </div>

                        <div class="payment">
                            <div class="row">
                                <div class="form-group col-md-6 mb-3 mt-3">
                                    <label for="owner">Card Holder Name</label>
                                    <div class="alert-danger text-danger" style="font-size: 15px"><small
                                            style="font-size: 13px">{{ $errors->first('owner') }}</small></div>
                                    <input type="text" name="owner" title="Enter Card Holder Name"
                                        class="form-control" id="owner" placeholder="sanju sooriyaarachchi">
                                </div>
                                <div class="form-group col-md-6 mb-3 mt-3">
                                    <label for="cvv">CVV</label>
                                    <div class="alert-danger text-danger" style="font-size: 15px"
                                        style="font-size: 15px"><small>{{ $errors->first('CVV') }}</small></div>
                                    <input type="text" name="CVV" title="Enter CVV" class="form-control"
                                        id="cvv" placeholder="***">
                                </div>
                            </div>
                            <div class="form-group  mb-3 mt-3" id="card-number-field">
                                <label for="cardNumber">Card Number</label>
                                <div class="alert-danger text-danger" style="font-size: 15px">
                                    <small>{{ $errors->first('CardNo') }}</small></div>
                                <input type="text" name="CardNo" title="Enter Card Number" class="form-control"
                                    id="cardNumber" placeholder="eg : 5105 1051 0510 5100">
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6 mb-3 mt-3" id="expiration-date"
                                    title=" select expiration-date">
                                    <label>Expiration Date</label><br>
                                    <select name="month">
                                        <option value="01">January</option>
                                        <option value="02">February </option>
                                        <option value="03">March</option>
                                        <option value="04">April</option>
                                        <option value="05">May</option>
                                        <option value="06">June</option>
                                        <option value="07">July</option>
                                        <option value="08">August</option>
                                        <option value="09">September</option>
                                        <option value="10">October</option>
                                        <option value="11">November</option>
                                        <option value="12">December</option>
                                    </select>
                                    <select name="year">
                                        <option value="22"> 2022</option>
                                        <option value="23"> 2023</option>
                                        <option value="24"> 2024</option>
                                        <option value="25"> 2025</option>
                                        <option value="26"> 2026</option>
                                        <option value="27"> 2027</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6 mb-3 mt-3" id="credit_cards">
                                    <img src="images/visa.jpg" id="visa">
                                    <img src="images/mastercard.jpg" id="mastercard">
                                    <img src="images/amex.jpg" id="amex">
                                </div>
                            </div>
                            <div class="row  mb-3 mt-4">
                                <label for="inputNIC">Enter Initial Top-up Amount(LKR)<p style="color: rgb(141, 95, 11)">
                                        <small>(It Must be greater than 100.00 LKR)</small></p></label>
                                <div class="alert-danger text-danger" style="font-size: 15px">
                                    <small>{{ $errors->first('Initalpay') }}</small></div>
                                <div class="form-group col-md-4">
                                    <input type="text" name="Initalpay" title="Please Top-up Amount"
                                        class="form-control" id="inputamount" placeholder="eg : 200.00">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- id="confirm-purchase" --}}
                <div class="row justify-content-center" id="pay-now">
                    <button class="btn btn-primary me-md-5 pl-5" type="reset" style="width: 170px">Clear </button>
                    <button class="btn btn bg-warning me-md-5 pl-5" type="submit" style="width: 170px">Register and
                        Top-up</button>
                    <div class="space" style="padding-top: 3vh"> </div>

                </div>
            </form>

        </div>

        <div class="space" style="padding-top: 9vh"> </div>
    </div>
@endsection
@push('css')
    <style>
       body {
            background-image: linear-gradient( 92.7deg,  rgba(245,212,212,1) 8.5%, rgba(252,251,224,1) 90.2% );
        }

        .alert {
            background: #ffdb9b;
            padding: 20px 40px;
            min-width: 420px;
            position: absolute;
            overflow: hidden;
            right: 0px;
            top: 70px;
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
    <script src="js/jquery.payform.min.js" charset="utf-8"></script>
    <script src="js/script.js"></script>
@endpush
