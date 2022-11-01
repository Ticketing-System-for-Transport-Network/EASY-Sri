@extends('layouts.app')
@section('content')
    <link rel="stylesheet" type="text/css" href="css/stylespayment.css">
    <img src="../logo.png" style="width:600px;height:500px;display:block;margin:auto;padding: auto;" alt="space logo" />


    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="css/demo.css">

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
    <div class="container">
       <h3 style="text-align: center;font-size:40px"> Hello {{ $name }},<span class="wave">👋</span></h3>
        {{-- <h4>Hello {{ $udata->Fname}} {{ $udata->Lname}},</h4> --}}
        <h1 style="color: rgb(14, 138, 96);text-align:center;font-size:80px">Welcome to Easy-sri</h1>
        <div class="userdetails">
            <div class="space" style="padding-top: 10vh"> </div>
            <h1>. . . User Details . . . </h1>
            @if ($totalPrice > 0)
                @foreach ($userdetails as $udata)
        </div>


        <div class="container1">
            <div class="blueBg">
                <div class="box userdetails">
                    <h2>User Details</h2>
                    <button class="requestBtn"> Display</button>
                </div>
                <div class="box edituserdetails">
                    <h2>Update User Details</h2>
                    <button class="updatebtn"> Request to Update</button>
                </div>
            </div>
            <div class="formBx">
                <div class="form userview">
                    <form>
                        <div class="data">
                            <h3 style="color: #ce8500; text-align:center;">Easy-Sri Card Details </h3>
                            <h5 class="card-title mt-3"><strong>Easy-Sri Card No :
                                </strong><small>{{ $udata->Easysrino }}</small></h5>
                            <h5 class="card-title mt-1"><strong>User Name : </strong><small>{{ $udata->Fname }}
                                    {{ $udata->Lname }}</small> </h5>
                            <h5 class="card-title mt-1"><strong>User NIC : </strong><small>{{ $udata->NIC }}</small></h5>
                            <h5 class="card-title mt-1"><strong>User Address : </strong><small>{{ $udata->Address }}</small>
                            </h5>
                            <h5 class="card-title mt-1"><strong>User Mobile Number :
                                </strong></b><small>{{ $udata->MobNo }}</small></h5>
                            <h5 class="card-title mt-1"><strong>Account Created Date :
                                </strong><small>{{ date('Y-m-d', strtotime($udata->created_at)) }}</small></h5>
                            <h5 class="card-title mt-1"><strong>Available Balance :
                                </strong></b><small>{{ $totalPrice }}</small></h5>

                        </div>
                    </form>
                </div>



                <div class="form updateview">
                    
                        <form action="{{ route('updateUser',$udata->userregid) }}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                        <div class="data">
                            <h3 style="text-align: center; color:rgb(197, 155, 38);">Update Details</h3>
                            <h5 class="card-title" style="text-align: left"><strong>Easy-Sri Card No : {{ $udata->Easysrino }} </strong><small></small></h5>
                            <div class="form-group">
                                <div class="row">
                                    <div class="form-group col-md-6  ">
                                        <label for="inputfname">First Name</label>
                                        <div class="alert-danger text-danger" style="font-size: 15px">
                                            <small>{{ $errors->first('Fname') }}</small></div>
                                        <input type="text" name="Fname" title="Please Enter First Name" class="form-control"
                                        value="{{ $udata->Fname }}" id="inputfname" placeholder="Chandima">
                                    </div>
                                    <div class="form-group col-md-6  ">
                                        <label for="inputlname">Last Name</label>
                                        <div class="alert-danger text-danger" style="font-size: 15px">
                                            <small>{{ $errors->first('Lname') }}</small></div>
                                        <input type="text" name="Lname" title="Please Enter Last Name" class="form-control"
                                        value="{{ $udata->Lname }}"  id="inputlname" placeholder="Sooriyaarachchi">
                                    </div>
                                </div>    </div>
                            <div class="form-group  mt-3">
                                <label for="formGroupExampleInput2">User Address</label>
                                <div class="alert-danger text-danger" style="font-size: 15px">
                                    <small>{{ $errors->first('Address') }}</small></div>
                                <input type="text" name="Address" class="form-control" value="{{ $udata->Address }}"  placeholder="kegalle, Srilanka">
                            </div>
                            <div class="form-group  mt-3">
                                <label for="formGroupExampleInput2">Mobile Number</label>
                                <div class="alert-danger text-danger" style="font-size: 15px">
                                    <small>{{ $errors->first('MobNo') }}</small></div>
                                <input type="text" name="MobNo" class="form-control" value="{{ $udata->MobNo }}" placeholder="070 5901816">
                            </div>
                            <div class="row justify-content-center">
                                <div class="space" style="padding-left: 11vh">
                                    <button class="btn btn-primary me-md-5 pl-5 mt-3" type="reset"
                                        style="width: 100px">Clear </button>
                                    <button class="btn btn bg-warning me-md-5 pl-5 mt-3" type="submit"
                                        style="width: 100px" >Update</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>



        @endforeach
    @else
        <div class="space" style="padding-top: 5vh"> </div>
        <h3 style="color: red">No User Details Available! </h3>
        <P>Please Register To The Easy-Sri System</P>
        @endif
    </div>


    <div class="container">
        <div class="row">
            <div class="col">
                <div class="space" style="padding-top: 9vh"> </div>
                <img src="../images/userpayment2.svg" alt="My Happy SVG" />
            </div>
            <div class="col">


                <div class="container-fluid">
                    <div class="creditCardForm">
                        <div class="heading">
                            <h1 style="color: #FFA500;">Top-up Easy-Sri</h1>
                        </div>
                        <div class="payment">
                            <form action="{{ route('storeusertopup') }}" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group owner">
                                    <label for="owner">Owner</label>
                                    <div class="alert-danger text-danger" style="font-size: 15px">
                                        <small>{{ $errors->first('owner') }}</small>
                                    </div>
                                    <input type="text" name="owner" class="form-control" id="owner">
                                </div>
                                <div class="form-group CVV">
                                    <label for="cvv">CVV</label>
                                    <div class="alert-danger text-danger" style="font-size: 15px">
                                        <small>{{ $errors->first('CVV') }}</small>
                                    </div>
                                    <input type="text" name="CVV" class="form-control" id="cvv">
                                </div>
                                <div class="form-group" id="card-number-field">
                                    <label for="cardNumber">Card Number</label>
                                    <div class="alert-danger text-danger" style="font-size: 15px">
                                        <small>{{ $errors->first('cardnumber') }}</small>
                                    </div>
                                    <input type="text" name="cardnumber" class="form-control" id="cardNumber">
                                </div>
                                <div class="form-group" id="expiration-date">
                                    <label>Expiration Date</label>
                                    <select>
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
                                    <select>
                                        <option value="22"> 2022</option>
                                        <option value="23"> 2023</option>
                                        <option value="24"> 2024</option>
                                        <option value="25"> 2025</option>
                                        <option value="26"> 2026</option>
                                        <option value="27"> 2027</option>
                                    </select>
                                </div>
                                <div class="form-group" id="credit_cards">
                                    <img src="images/visa.jpg" id="visa">
                                    <img src="images/mastercard.jpg" id="mastercard">
                                    <img src="images/amex.jpg" id="amex">
                                </div>
                                <label for="payment">Top-up Ampount</label>
                                <div class="form-group col-md-4 ">
                                    <div class="alert-danger text-danger" style="font-size: 15px">
                                        <small>{{ $errors->first('amount') }}</small>
                                    </div>
                                    <input type="text" name="amount" class="form-control" id="confirm-purchase"
                                        id="topup">
                                </div>
                                <div class="form-group" id="pay-now">
                                    <button type="submit" class="btn btn-default">Confirm</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    </div>
@endsection
@push('js')
    <script src="js/jquery.payform.min.js" charset="utf-8"></script>
    <script src="js/script.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script>
        const requestBtn = document.querySelector('.requestBtn')
        const updatebtn = document.querySelector('.updatebtn');
        const formBx = document.querySelector('.formBx');
        const container1 = document.querySelector('.container1');

        updatebtn.onclick = function() {
            formBx.classList.add('active')
            container1.classList.add('active')
        }
        requestBtn.onclick = function() {
            formBx.classList.remove('active')
            container1.classList.remove('active')
        }
    </script>
@endpush

@push('css')

    <style>
         body {
            background-image: linear-gradient( 92.7deg,  rgba(245,212,212,1) 8.5%, rgba(252,251,224,1) 90.2% );
        }
.wave {
  animation-name: wave-animation;  /* Refers to the name of your @keyframes element below */
  animation-duration: 2.5s;        /* Change to speed up or slow down */
  animation-iteration-count: infinite;  /* Never stop waving :) */
  transform-origin: 70% 70%;       /* Pivot around the bottom-left palm */
  display: inline-block;
}

@keyframes wave-animation {
    0% { transform: rotate( 0.0deg) }
   10% { transform: rotate(14.0deg) }  /* The following five values can be played with to make the waving more or less extreme */
   20% { transform: rotate(-8.0deg) }
   30% { transform: rotate(14.0deg) }
   40% { transform: rotate(-4.0deg) }
   50% { transform: rotate(10.0deg) }
   60% { transform: rotate( 0.0deg) }  /* Reset for the last half to pause */
  100% { transform: rotate( 0.0deg) }
}




/* For demonstration purposes only: */



        .userdetails {
            text-align: center;
        }

        .userinfo {
            margin-top: 2vh;
            margin-left: 50vh;
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
@endpush
