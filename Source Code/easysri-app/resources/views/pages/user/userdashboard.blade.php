@extends('layouts.app')
@section('content')
<div class="hero-image">
    <div class="space" style="padding-top: 53vh">  </div>
 <h1>   Welcome to Easy-Sri <h1>
    <div class="space" style="padding-top: 53vh">  </div>
</div>
 @endsection
@push('css')
<style>

.hero-image {
 background-image: url("images/transport02.jpg");
  background-color: #3d3838;

 
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}
h1{
    color: aliceblue;
}
body{
    background-color: #111;
}

</style>
@endpush