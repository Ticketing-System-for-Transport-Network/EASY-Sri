@extends('layouts.app')
@section('content')

<link rel="stylesheet" type="text/css" href="css/styles.css">
<link rel="stylesheet" type="text/css" href="css/demo.css">


<img src="../logo.png" style="width:600px;height:500px;display:block;margin:auto;padding: auto;" alt="space logo">
<h1 style="color: #FFA500; text-align:center;">Set Up Your Easy-Sri Account</h1>

<div class="container" style="border:3px solid #5f6064; border-radius: 5px; box-shadow: 5px 10px #888888;">
    <form>
    <div class="row">
        <div class="col-6">
            <div class="space" style="padding-top: 4vh">  </div>
            <h4 style="text-align:center";>Registration Details</h4>
            <div class="space" style="padding-top: 3vh">  </div>
            
                <div class="row">
                  <div class="form-group col-md-6 mb-3 mt-3">
                    <label for="inputEmail4">First Name</label>
                    <input type="text" title="Please Enter First Name" class="form-control" id="inputfname" placeholder="Chandima">
                  </div>
                  <div class="form-group col-md-6 mb-3 mt-3">
                    <label for="inputPassword4">Last Name</label>
                    <input type="text" title="Please Enter Last Name" class="form-control" id="inputlname" placeholder="Sooriyaarachchi">
                  </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-4 mb-3 mt-3">
                        <label for="inputNIC">NIC Number</label>
                        <input type="text" title="Please Enter NIC Number" class="form-control" id="inputNIC" placeholder="eg : 99********">
                    </div> 
                </div>
                <div class="form-group mb-3 mt-3">
                  <label for="inputAddress">Address</label>
                  <input type="text" title="Please Enter Address" class="form-control" id="inputAddress" placeholder="1234 Main St">
                </div>
                
                <div class="row">
                    <div class="form-group col-md-4 mb-3 mt-3">
                        <label for="inputCity">City</label>
                        <input type="text" title="Please Enter City" class="form-control" id="inputCity" placeholder="eg : Kegalle">
                    </div>
                  <div class="form-group col-md-3 me-md-5 mb-3 mt-3">
                    <label for="inputZip">Postal Code</label>
                    <input type="text" title="Please Enter Postal Code" class="form-control" id="inputZip" placeholder="eg : 71050">
                  </div>
                  <div class="form-group col-md-4 me-md-2 mb-3 mt-3">
                    <label for="inputMno">Mobile NUmber</label>
                    <input type="text" title="Please Enter Mobile NUmber" class="form-control" id="inputMno" placeholder="eg : 0700000000">
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                      Check me out
                    </label>
                  </div>
                </div>
                <div class="space" style="padding-top: 3vh">  </div>
            
        </div>
        <div class="col-6">
            <div class="space" style="padding-top: 4vh">  </div>
            <h4 style="text-align:center";>Payment Details</h4>
            <div class="space" style="padding-top: 3vh">  </div>

            <div class="payment">
                <div class="row">
                    <div class="form-group col-md-6 mb-3 mt-3">
                        <label for="owner">Card Holder Name</label>
                        <input type="text" title="Enter Card Holder Name" class="form-control" id="owner" placeholder="sanju sooriyaarachchi">
                    </div>
                    <div class="form-group col-md-6 mb-3 mt-3">
                        <label for="cvv">CVV</label>
                        <input type="text" title="Enter CVV" class="form-control" id="cvv" placeholder="***">
                    </div>
                </div>
                    <div class="form-group  mb-3 mt-3" id="card-number-field">
                        <label for="cardNumber">Card Number</label>
                        <input type="text" title="Enter Card Number" class="form-control" id="cardNumber" placeholder="eg : 5105105105105100">
                    </div>
                <div class="row">
                    <div class="form-group col-md-6 mb-3 mt-3" id="expiration-date" title=" select expiration-date">
                        <label>Expiration Date</label><br>
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
                    <div class="form-group col-md-6 mb-3 mt-3" id="credit_cards">
                        <img src="images/visa.jpg" id="visa">
                        <img src="images/mastercard.jpg" id="mastercard">
                        <img src="images/amex.jpg" id="amex">
                    </div>
                </div> 
                <div class="row  mb-3 mt-4">
                    <label for="inputNIC">Enter Initial Top-up Amount(LKR)<p style="color: rgb(236, 81, 81)"><small>(It Must be greater than 100.00 LKR)</small></p></label>
                    <div class="form-group col-md-4"> 
                        <input type="text" title="Please Top-up Amount" class="form-control" id="inputamount" placeholder="eg : 200.00">
                    </div> 
                </div>       
            </div>
        </div>
    </div> 
    
    <div class="row justify-content-center" id="pay-now">
        <button type="submit" class="btn btn-warning" id="confirm-purchase" style="width: 200px">Register and Top-up</button>
      </div>
      <div class="space" style="padding-top: 3vh">  </div>
</form>  

</div>

<div class="space" style="padding-top: 9vh">  </div>

@endsection
@push('css')
<style>
.vr {
    border-left: 6px solid rgb(79, 184, 18);
    height: 200px;
    position:absolute;
    left: 50%;
}
</style>
@endpush

@push('js')
<script src="js/jquery.payform.min.js" charset="utf-8"></script>
<script src="js/script.js"></script>
@endpush