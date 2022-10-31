@extends('layouts.app')
@section('content')


<link rel="stylesheet" type="text/css" href="css/stylespayment.css">
    <img src="../logo.png" style="width:600px;height:500px;display:block;margin:auto;padding: auto;" alt="space logo" />

    <h1 style="text-align:center;color:rgb(17, 206, 64);font-size:80px;">Calculate Fares and Distance </h1>

    <div class="container">
  
      <div class="row">
          <div class="form-group col-md-6 mb-3 mt-3"><strong>
              <label for="inputDeparture">Departure Point :</label></strong>
              <div class="alert-danger text-danger" style="font-size: 15px">
                  <small>{{ $errors->first('Fname') }}</small></div>
            <input type="text" name="Departure" title="Please Enter Departure" class="form-control"
                  id="inputDeparture" placeholder="Kegalle, Sri lanka"> 
          </div>
          <div class="form-group col-md-6 mb-3 mt-3"><strong>
              <label for="inputArrival">Arrival Point :</label></strong> 
              <div class="alert-danger text-danger" style="font-size: 15px">
                  <small>{{ $errors->first('Lname') }}</small></div>
              <input type="text" name="Arrival" title="Please Enter Arrival" class="form-control"
                  id="inputArrival" placeholder="Malabe, Sri lanaka">
          </div>
      </div>
  </div>
    </div>
    <div class="space" style="padding-top: 10vh"> </div>
    @endsection
    @push('css')   
    @endpush

    @push('js')
    <script> 
    </script>
    @endpush