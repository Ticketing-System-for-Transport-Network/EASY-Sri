@extends('layouts.app')
@section('content')

<img src="../logo.png" style="width:600px;height:500px;display:block;margin:auto;padding: auto;" alt="space logo" />

<div class="container">
    <h1 style="text-align:center;color:blue">Bus Timetable </h1>
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Route No</th>
            <th scope="col">Departure Place</th>
            <th scope="col">Departure Time </th>
            <th scope="col">Arrival Place</th> 
            <th scope="col">Arrival Time</th>
            <th scope="col">Distance</th>
            <th scope="col">Time Taken </th>
            <th scope="col">Bus Type</th>
            <th scope="col">Service Type</th>
            <th scope="col">No Of Buses</th>
            <th scope="col">Charge Rs. </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row"></th>
            <td></td>
            <td></td>
            <td></td>
          </tr>
        </tbody>
      </table>

      <h1 style="text-align:center;color:rgb(17, 206, 64)">Calculate Fares and Distance </h1>

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

<div class="space" style="padding-top: 5vh"> </div>
 
@endsection
