@extends('layouts.app')
@section('content')

<img src="../logo.png" style="width:600px;height:500px;display:block;margin:auto;padding: auto;" alt="space logo">


<link rel="stylesheet" type="text/css" href="css/styles.css">
<link rel="stylesheet" type="text/css" href="css/demo.css">


<div class="container">
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
                    <form>
                        <div class="form-group owner">
                            <label for="owner">Owner</label>
                            <input type="text" class="form-control" id="owner">
                        </div>
                        <div class="form-group CVV">
                            <label for="cvv">CVV</label>
                            <input type="text" class="form-control" id="cvv">
                        </div>
                        <div class="form-group" id="card-number-field">
                            <label for="cardNumber">Card Number</label>
                            <input type="text" class="form-control" id="cardNumber">
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
                        <div class="form-group" id="pay-now">
                            <button type="submit" class="btn btn-default" id="confirm-purchase">Confirm</button>
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
@endpush