@extends('layouts.app')
@section('content')


<link rel="stylesheet" type="text/css" href="css/stylespayment.css">
    <img src="../logo.png" style="width:600px;height:500px;display:block;margin:auto;padding: auto;" alt="space logo" />

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
                        <h3>User Details</h3>
                         <h5 class="card-title mt-3"><strong>Easy-Sri Card No : </strong><small></small></h5>
                        <h5 class="card-title mt-1"><strong>User Name : </strong><small></small>
                        </h5>
                        <h5 class="card-title mt-1"><strong>User NIC : </strong><small></small></h5>
                        <h5 class="card-title mt-1"><strong>User Address : </strong><small></small></h5>
                        <h5 class="card-title mt-1"><strong>User Mobile Number : </strong></b><small></small></h5>
                        <h5 class="card-title mt-1"><strong>Account Created Date : </strong><small></small></h5>
                        <h5 class="card-title mt-1"><strong>Available Balance : </strong></b><small></small></h5>
                    </div>
                </form>
            </div>



            <div class="form updateview">
                <form>
                    <div class="data">
                        <h3>Update Details</h3>   
                           <h5 class="card-title mt-3"><strong>Easy-Sri Card No : </strong><small></small></h5>
                            <div class="form-group">
                              <label for="formGroupExampleInput">Example label</label>
                              <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
                            </div>
                            <div class="form-group">
                              <label for="formGroupExampleInput2">Another label</label>
                              <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Another label</label>
                                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
                              </div>
                              <div class="row justify-content-center"> <div class="space" style="padding-left: 8vh"> 
                              <button class="btn btn-primary me-md-5 pl-5 mt-3" type="reset" style="width: 150px">Clear </button>
                              <button class="btn btn bg-warning me-md-5 pl-5 mt-3" type="submit" style="width: 150px">Update</button></div>
                    </div></div>
                </form>
            </div>


        </div>
    </div>
        
    @endsection
    @push('css')
        
    @endpush
    @push('js')
    <script>
        const requestBtn = document.querySelector('.requestBtn')
        const updatebtn = document.querySelector('.updatebtn');
        const formBx = document.querySelector('.formBx');
        const container1 = document.querySelector('.container1');

        updatebtn.onclick = function(){
            formBx.classList.add('active')
            container1.classList.add('active')
        }
        requestBtn.onclick = function(){
            formBx.classList.remove('active')
            container1.classList.remove('active')
        }
    </script>
    @endpush