@extends('layouts.app')
@section('content')
    <link rel="stylesheet" type="text/css" href="css/stylespayment.css">
    <img src="../logo.png" style="width:600px;height:500px;display:block;margin:auto;padding: auto;" alt="space logo" />

    <h1 style="text-align:center;color:rgb(17, 206, 64);font-size:80px;">Calculate Fares and Distance </h1>
    <div class="space" style="padding-top: 6vh"> </div>
    <div class="container">

        <div class="container_display">
            <h5 style="color: brown">If you're traveling in Sri Lanka with an Easy-Sri card during off-peak times your fare
                will be 10% cheaper...
                <p> Start and end your journey during these times to receive the off-peak savings:
            </h5>
            <p style="color: rgb(13, 94, 201)">Off-Peak Hours : </p>
            <h6> 9.00am – 3.00pm and 7.00pm – 6.00am the next day (All Days)</h6>
            <p style="color: rgb(13, 94, 201)">Peak Hours : </p>
            <h6> 6.00 am - 9.00 am and 3.00 pm - 7.00pm (All Days)</h6>
            </h5>
            <form id="distance_form">
                <div class="row">
                    <div class="form-group col-md-6 mb-3 mt-3"><strong>
                            <label for="inputDeparture">Departure Point :</label></strong>
                        <input type="text" title="Please Enter Departure" class="form-control" id="from_places"
                            placeholder="Kegalle, Sri lanka" required>
                        <input id="origin" name="origin" required="" type="hidden" />
                    </div>
                    <div class="form-group col-md-6 mb-3 mt-3"><strong>
                            <label for="inputArrival">Arrival Point :</label></strong>
                        <input type="text" title="Please Enter Arrival" class="form-control" id="to_places"
                            placeholder="Malabe, Sri lanaka" required>
                        <input id="destination" name="destination" required="" type="hidden" />
                    </div>
                    <div class="space" style="padding-left: 29vh">
                        <div class="col-lg-6 ">
                            <div class="mb-5 "><strong>
                                    <label for="dept_time" class="form-label">Departure Time</label></strong>
                                <input title="This includes the arrival time "
                                    type="time" class="form-control form-control-lg" id="dept_timeid" name="dept_time" oninput="check(this.value)"
                                    placeholder="Enter the arrival time here (e.g. 7.00 AM)" required>
                                <br>

                            </div>
                        </div>
                    </div>
                </div>
                <input class="btn btn-primary" style="margin-left: 39%;width:180px;height:60px;font-size:30px"
                    type="submit" value="Calculate" />
            </form>

            <div class="space" style="padding-top: 4vh"> </div>

            <div id="result">
                <ul class="list-group">
                    <ul class="list-group">
                      <center> <li id="stats" style="color: brown" class="list-group-item">Off-Peak OR Peak Status</li></center> 
                        <li id="kilo" class="list-group-item">Distance in Kilometre :</li>
                        <li id="text" class="list-group-item">Allocated Time :</li>
                        <li id="normal" class="list-group-item">Normal Bus Fare :</li>
                        <li id="semi" class="list-group-item">Semi Luxury Bus Fare :</li>
                        <li id="luxury" class="list-group-item">Luxury Bus Fare :</li>
                    </ul>

                    <div class="space" style="padding-top: 10vh"> </div>

                    <h2 style="color: rgb(177, 124, 10)">Choose Special Packages and Display Fares :</h2>

                    <ul class="list-group">
                        {{-- <li  id="oneday" class="list-group-item">One Day Full Package Fare   :</li> --}}
                        <li id="oneweek" class="list-group-item">One Week Full Package Fare :</li>
                        <li id="twoweek" class="list-group-item">Two Week Full Package Fare :</li>
                        <li id="onemonth" class="list-group-item">One Month Full Package Fare :</li>
                    </ul>

            </div>

            <div class="space" style="padding-top: 10vh"> </div>
        </div>


    </div>

    </div>
    </div>
@endsection
@push('css')
    <style>
        body {
            background-image: linear-gradient(92.7deg, rgba(245, 212, 212, 1) 8.5%, rgba(252, 251, 224, 1) 90.2%);
        }

        .container_display {
            width: 800px;
            height: 100%;
            font-size: 24px;
            margin-left: 20%;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
    </style>
@endpush

@push('js')
    <script>
        < script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" >
    </script>

    <script defer
        src="https://maps.googleapis.com/maps/api/js?libraries=places&language=en&key=AIzaSyAuY6iB9WBika5i8RBzl4ItkvDGOSyvCmQ"
        type="text/javascript"></script>

    <script>
        

        $(function() {

           
            // add input listeners
            google.maps.event.addDomListener(window, "load", function() {
                var from_places = new google.maps.places.Autocomplete(
                    document.getElementById("from_places")
                );
                var to_places = new google.maps.places.Autocomplete(
                    document.getElementById("to_places")
                );

                google.maps.event.addListener(
                    from_places,
                    "place_changed",
                    function() {
                        var from_place = from_places.getPlace();
                        var from_address = from_place.formatted_address;
                        $("#origin").val(from_address);
                    }
                );

                google.maps.event.addListener(
                    to_places,
                    "place_changed",
                    function() {
                        var to_place = to_places.getPlace();
                        var to_address = to_place.formatted_address;
                        $("#destination").val(to_address);
                    }
                );
            });

          


            // calculate distance
            function calculateDistance() {

                //peak non peak
                var peaktime =ptime;
                     console.log(peaktime);

                var origin = $("#origin").val();
                var destination = $("#destination").val();
                var service = new google.maps.DistanceMatrixService();
                service.getDistanceMatrix({
                        origins: [origin],
                        destinations: [destination],
                        travelMode: google.maps.TravelMode.DRIVING,
                        unitSystem: google.maps.UnitSystem.IMPERIAL, // miles and feet.
                        // unitSystem: google.maps.UnitSystem.metric, // kilometers and meters.
                        avoidHighways: false,
                        avoidTolls: false,
                    },
                    callback
                );
            }
            // get distance results
            function callback(response, status) {
                if (status != google.maps.DistanceMatrixStatus.OK) {
                    $("#result").html(err);
                } else {
                    var origin = response.originAddresses[0];
                    console.log(response)
                    console.log(origin);
                    var destination = response.destinationAddresses[0];
                    console.log(destination);
                    if (response.rows[0].elements[0].status === "ZERO_RESULTS") {
                        $("#result").html(
                            "Better get on a plane. There are no roads between " +
                            origin +
                            " and " +
                            destination
                        );
                    } else {

                      

                        var distance = response.rows[0].elements[0].distance;
                        console.log(distance);
                        var duration = response.rows[0].elements[0].duration;
                        console.log(duration);
                        console.log(response.rows[0].elements[0].distance);
                        var distance_in_kilo = distance.value / 1000; // the kilom
                        var distance_in_mile = distance.value / 1609.34; // the mile
                        console.log(distance_in_kilo);
                        console.log(distance_in_mile);
                        var duration_text = duration.text;
                        var duration_value = duration.value;

                     


                        
if(ptime == 1){
    console.log('peak');
    var bus_peak_fare = {{ $lastfare->charge }};
                        if (distance_in_kilo > 60) {
                            var normalcal = distance_in_kilo * bus_peak_fare * 0.2;
                        } else {
                            var normalcal = distance_in_kilo * bus_peak_fare * 0.3;
                        }
                        console.log(normalcal);

                        //semical distance
                        if (distance_in_kilo > 50) {
                            var semical = distance_in_kilo * bus_peak_fare * 0.4;
                        } else {
                            var semical = distance_in_kilo * bus_peak_fare * 0.6;
                        }
                        console.log(semical);

                        //luxury distance
                        if (distance_in_kilo > 50) {
                            var luxurycal = distance_in_kilo * bus_peak_fare * 0.7;
                        } else {
                            var luxurycal = distance_in_kilo * bus_peak_fare * 0.9;
                        }
                        console.log(luxurycal);



                        //packages
                        if (distance_in_kilo > 60) {
                            var oneweekcal = distance_in_kilo * bus_peak_fare * 0.2 * 5;
                        } else {
                            var oneweekcal = distance_in_kilo * bus_peak_fare * 0.3 * 5;
                        }
                        console.log(oneweekcal);


                        if (distance_in_kilo > 60) {
                            var twoweekcal = distance_in_kilo * bus_peak_fare * 0.2 * 7;
                        } else {
                            var twoweekcal = distance_in_kilo * bus_peak_fare * 0.3 * 7;
                        }
                        console.log(twoweekcal);

                        if (distance_in_kilo > 60) {
                            var onemonthcal = distance_in_kilo * bus_peak_fare * 0.2 * 13;
                        } else {
                            var onemonthcal = distance_in_kilo * bus_peak_fare * 0.3 * 13;
                        }
}else{
    console.log('Off - peak');
    var per_one_cal = {{ $lastfare->charge }};
var t1 = per_one_cal/100;
var t2 = t1*5;
     var bus_peak_fare = per_one_cal-t2;
     console.log(bus_peak_fare);
                        if (distance_in_kilo > 60) {
                            var normalcal = distance_in_kilo * bus_peak_fare * 0.2;
                        } else {
                            var normalcal = distance_in_kilo * bus_peak_fare * 0.3;
                        }
                        console.log(normalcal);

                        //semical distance
                        if (distance_in_kilo > 50) {
                            var semical = distance_in_kilo * bus_peak_fare * 0.4;
                        } else {
                            var semical = distance_in_kilo * bus_peak_fare * 0.6;
                        }
                        console.log(semical);

                        //luxury distance
                        if (distance_in_kilo > 50) {
                            var luxurycal = distance_in_kilo * bus_peak_fare * 0.7;
                        } else {
                            var luxurycal = distance_in_kilo * bus_peak_fare * 0.9;
                        }
                        console.log(luxurycal);



                        //packages
                        if (distance_in_kilo > 60) {
                            var oneweekcal = distance_in_kilo * bus_peak_fare * 0.2 * 5;
                        } else {
                            var oneweekcal = distance_in_kilo * bus_peak_fare * 0.3 * 5;
                        }
                        console.log(oneweekcal);


                        if (distance_in_kilo > 60) {
                            var twoweekcal = distance_in_kilo * bus_peak_fare * 0.2 * 7;
                        } else {
                            var twoweekcal = distance_in_kilo * bus_peak_fare * 0.3 * 7;
                        }
                        console.log(twoweekcal);

                        if (distance_in_kilo > 60) {
                            var onemonthcal = distance_in_kilo * bus_peak_fare * 0.2 * 13;
                        } else {
                            var onemonthcal = distance_in_kilo * bus_peak_fare * 0.3 * 13;
                        }

}



                       
                        console.log(onemonthcal);

                        console.log(ptime);
                        console.log(stat);
                        


                        

                        $("#stats").html(`${stat}`);

                        $("#mile").html(
                            `Distance in Miles: ${distance_in_mile.toFixed(2)}`
                        );
                        $("#kilo").html(
                            `Distance in Kilometers : ${distance_in_kilo.toFixed(2)}`
                        );
                        $("#text").html(`Allocated Time   : ${duration_text}`);
                        $("#minute").html(`Allocated Time   : ${duration_value}`);
                        $("#from").html(`Distance From : ${origin}`);
                        $("#to").text(`Distance to: ${destination}`);

                        $("#normal").html(`Normal Bus Fare: Rs. ${normalcal.toFixed(2)}`);
                        $("#semi").html(`Semi Luxury Bus Fare : Rs. ${semical.toFixed(2)}`);
                        $("#luxury").html(`Luxury Bus Fare : Rs. ${luxurycal.toFixed(2)}`);

                        $("#oneweek").html(`One Week Full Package Fare  : Rs. ${oneweekcal.toFixed(2)}`);
                        $("#twoweek").html(`Two Week Full Package Fare : Rs. ${twoweekcal.toFixed(2)}`);
                        $("#onemonth").html(`One Month Full Package Fare     : Rs. ${onemonthcal.toFixed(2)}`);
                    }
                }
            }
            // print results on submit the form
            $("#distance_form").submit(function(e) {
                e.preventDefault();
                calculateDistance();
            });
        });
        var stat;
        var ptime;
        var time;
       function check(e){
        // console.log(e);
        time=e;
     console.log(time);
     var array = time.split(":");
     var stringarry = array.toString();
     var output = parseFloat(stringarry.replace(/,/g, ''));
   
     console.log(output);
                     if(((output >= 0900)&&(output <=1500))||((output >= 1900)&&(output <=2400))||((output>=0000)&&(output<=600))){
                            ptime=0;
                            stat="Off-Peak Time Bus Fares";
                            console.log("off peak time");
                            console.log(ptime);
                            //  var bus_peak_fare = bus_peak_fare_cal*5%;
                        }else{
                             ptime=1;
                             stat="Peak Time Bus Fares";
                            console.log(" peak time");
                            console.log(ptime);
                            // var bus_peak_fare = bus_peak_fare_cal;
                        }           

       }
      
    </script>
@endpush
