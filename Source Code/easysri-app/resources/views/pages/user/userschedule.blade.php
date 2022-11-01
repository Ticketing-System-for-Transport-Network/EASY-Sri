@extends('layouts.app')
@section('content')

<img src="../logo.png" style="width:600px;height:500px;display:block;margin:auto;padding: auto;" alt="space logo" />

<div class="container">
    <h1 style="text-align:center;color:blue;font-size:80px;">Bus Timetable </h1>
    <div class="space" style="padding-top: 8vh"> </div>
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Route No</th>
            <th scope="col">Departure Place</th>
            <th scope="col">Departure Time </th>
            <th scope="col">Arrival Place</th> 
            <th scope="col">Arrival Time</th>
            <th scope="col">Distance (km)</th>
            <th scope="col">Time Taken </th>
            <th scope="col">Bus Type</th>
            <th scope="col">Service Type</th>
            <th scope="col">No Of Buses</th>
            {{-- <th scope="col">Charge Rs. </th> --}}
          </tr>
        </thead>
        <tbody>
          @foreach ($timetable as $route)
          <tr>
            <th>{{ $route->route_id }}</th>
            <td>{{ $route->dep }}</td>
            <td>{{ $route->dep_time }}</td>
            <td>{{ $route->arr }}</td>
            <td>{{ $route->arr_time }}</td>
            <td>{{ $route->dis }}</td>
            <td>{{ $route->dis_time }}</td>
            <td>{{ $route->bus_t }}</td>
            <td>{{ $route->ser_t }}</td>
            <td>{{ $route->no_bus }}</td>
            {{-- <td>{{ $route->charge }}</td> --}}
          </tr>
          @endforeach
          
        </tbody>
      </table>

   
</div>

<div class="space" style="padding-top: 5vh"> </div>
 
@endsection
@push('css')

    <style>
         body {
            background-image: linear-gradient( 92.7deg,  rgba(245,212,212,1) 8.5%, rgba(252,251,224,1) 90.2% );
        }
   </style>
 @endpush
