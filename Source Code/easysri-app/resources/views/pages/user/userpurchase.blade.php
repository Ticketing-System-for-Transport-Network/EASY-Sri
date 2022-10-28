@extends('layouts.app')
@section('content')

<img src="../logo.png" style="width:600px;height:500px;display:block;margin:auto;padding: auto;" alt="space logo">


<link rel="stylesheet" type="text/css" href="css/styles.css">
<link rel="stylesheet" type="text/css" href="css/demo.css">

@if($errors->any())    
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
    <h1 style="color: rgb(14, 138, 96)">Welcome to Easy-sri</h1>
    <div class="userdetails"> 
        <h1>User Details</h1>
        
    </div>
    <div class="userinfo">
        <h5 class="card-title mt-3"><strong>Easy-Sri Card No : </strong><small>www</small></h5>
        <h5 class="card-title mt-1"><strong>User Name : </strong><small>www</small></h5>
        <h5 class="card-title mt-1"><strong>User NIC : </strong><small>www</small></h5>
        <h5 class="card-title mt-1"><strong>User Address : </strong><small>www</small></h5>
        <h5 class="card-title mt-1"><strong>User Mobile Number : </strong></b><small>www</small></h5>
        <h5 class="card-title mt-1"><strong>Account Created Date : </strong><small>www</small></h5>
        <h5 class="card-title mt-1"><strong>Available Balance : </strong></b><small>www</small></h5>
    </div>    


   
    <div class="row">  
      <div class="col">
        <div class="space" style="padding-top: 9vh">  </div>
        <img src = "../images/userpayment2.svg" alt="My Happy SVG"/>
      </div>
      <div class="col">
        

        <div class="container-fluid">
            <div class="creditCardForm">
                <div class="heading">
                    <h1 style="color: #FFA500;">Confirm Purchase</h1>
                </div>
                <div class="payment">
                    <form action="{{ route('storeusertopup') }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group owner">
                            <label for="owner">Owner</label>
                            <div class="alert-danger text-danger" style="font-size: 15px"><small>{{$errors->first('owner')}}</small></div>
                            <input type="text" name="owner" class="form-control" id="owner">
                        </div>
                        <div class="form-group CVV">
                            <label for="cvv">CVV</label>
                            <div class="alert-danger text-danger" style="font-size: 15px"><small>{{$errors->first('CVV')}}</small></div>
                            <input type="text" name="CVV" class="form-control" id="cvv">
                        </div>
                        <div class="form-group" id="card-number-field">
                            <label for="cardNumber">Card Number</label>
                            <div class="alert-danger text-danger" style="font-size: 15px"><small>{{$errors->first('cardnumber')}}</small></div>
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
                            <div class="alert-danger text-danger" style="font-size: 15px"><small>{{$errors->first('amount')}}</small></div>
                            <input type="text" name="amount" class="form-control"  id="confirm-purchase" id="topup">
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
@endsection
@push('js')
<script src="js/jquery.payform.min.js" charset="utf-8"></script>
<script src="js/script.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@endpush

@push('css')
<style>
    .userdetails{
        text-align: center;
    }
.userinfo{
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