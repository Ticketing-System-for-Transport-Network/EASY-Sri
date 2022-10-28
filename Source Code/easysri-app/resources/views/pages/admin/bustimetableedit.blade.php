<form method="post" action="{{ route('bustimeview.update', $bus->id) }}" enctype="multipart/form-data" role="form">
    {{ csrf_field() }}
    <div class="row justify-content-around">
        <div class="col-md-8 mb-4">
            <label for="Route_No-name" class="col-form-label">Route No:</label>
            <input class="form-control form-control-lg" type="text" class="form-control" name="route_id"
                value="{{ $bus->route_id }}" required>
            <br>
        </div>
    </div>

    <div class="row justify-content-around">
        <div class="col-md-8 mb-4">
            <label for="Departure-name" class="col-form-label">Departure:</label>
            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="dep"
                required>
                <option>{{ $bus->dep }}</option>
                <option value="Jaffna">Jaffna</option>
                <option value="Kilinochchi">Kilinochchi</option>
                <option value="Mannar">Mannar</option>
                <option value="Mullaitivu">Mullaitivu</option>
                <option value="Vavuniya">Vavuniya</option>
                <option value="Puttalam">Puttalam</option>
                <option value="Kurunegala">Kurunegala</option>
                <option value="Gampaha">Gampaha</option>
                <option value="Colombo">Colombo</option>
                <option value="Kalutara">Kalutara</option>
                <option value="Anuradhapura">Anuradhapura</option>
                <option value="Polonnaruwa">Polonnaruwa</option>
                <option value="Matale">Matale</option>
                <option value="Kandy">Kandy</option>
                <option value="Nuwara Eliya">Nuwara Eliya</option>
                <option value="Kegalle">Kegalle</option>
                <option value="Ratnapura">Ratnapura</option>
                <option value="Trincomalee">Trincomalee</option>
                <option value="Batticaloa">Batticaloa</option>
                <option value="Ampara">Ampara</option>
                <option value="Badulla">Badulla</option>
                <option value="Monaragala">Monaragala</option>
                <option value="Hambantota">Hambantota</option>
                <option value="Matara">Matara</option>
                <option value="Galle">Galle</option>
            </select>
            <br>
        </div>
    </div>

    <div class="row justify-content-around">
        <div class="col-md-8 mb-4">
            <label for="Departure_time-name" class="col-form-label">Departure Time:</label>
            <input type="time" class="form-control form-control-lg" name="dep_time" value="{{ $bus->dep_time }}"
                required>
            <br>
        </div>
    </div>

    <div class="row justify-content-around">
        <div class="col-md-8 mb-4">
            <label for="arrival-name" class="col-form-label">Arrival:</label>
            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="arr"
                required>
                <option>{{ $bus->arr }}</option>
                <option value="Jaffna">Jaffna</option>
                <option value="Kilinochchi">Kilinochchi</option>
                <option value="Mannar">Mannar</option>
                <option value="Mullaitivu">Mullaitivu</option>
                <option value="Vavuniya">Vavuniya</option>
                <option value="Puttalam">Puttalam</option>
                <option value="Kurunegala">Kurunegala</option>
                <option value="Gampaha">Gampaha</option>
                <option value="Colombo">Colombo</option>
                <option value="Kalutara">Kalutara</option>
                <option value="Anuradhapura">Anuradhapura</option>
                <option value="Polonnaruwa">Polonnaruwa</option>
                <option value="Matale">Matale</option>
                <option value="Kandy">Kandy</option>
                <option value="Nuwara Eliya">Nuwara Eliya</option>
                <option value="Kegalle">Kegalle</option>
                <option value="Ratnapura">Ratnapura</option>
                <option value="Trincomalee">Trincomalee</option>
                <option value="Batticaloa">Batticaloa</option>
                <option value="Ampara">Ampara</option>
                <option value="Badulla">Badulla</option>
                <option value="Monaragala">Monaragala</option>
                <option value="Hambantota">Hambantota</option>
                <option value="Matara">Matara</option>
                <option value="Galle">Galle</option>
            </select>
            <br>
        </div>
    </div>

    <div class="row justify-content-around">
        <div class="col-md-8 mb-4">
            <label for="arrival_time-name" class="col-form-label">Arrival Time:</label>
            <input type="time" class="form-control form-control-lg" name="arr_time" value="{{ $bus->arr_time }}"
                required>
            <br>
        </div>
    </div>

    <div class="row justify-content-around">
        <div class="col-md-8 mb-4">
            <label for="distance-name" class="col-form-label">Distance (KM):</label>
            <input type="text" class="form-control form-control-lg" name="dis" value="{{ $bus->dis }}"
                required>
            <br>
        </div>
    </div>

    <div class="row justify-content-around">
        <div class="col-md-8 mb-4">
            <label for="time-name" class="col-form-label">Time Taken (Minutes):</label>
            <input type="text" class="form-control form-control-lg" name="dis_time" value="{{ $bus->dis_time }}"
                required>
            <br>
        </div>
    </div>

    <div class="row justify-content-around">
        <div class="col-md-8 mb-4">
            <label for="bustype-name" class="col-form-label">Bus Type:</label>
            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="bus_t"
                required>
                <option>{{ $bus->bus_t }}</option>
                <option value="CTB" style="color: red;">CTB</option>
                <option value="PVT" style="color: #FFA500;">PVT</option>
            </select>
            <br>
        </div>
    </div>

    <div class="row justify-content-around">
        <div class="col-md-8 mb-4">
            <label for="servicetype-name" class="col-form-label">Service Type:</label>
            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="ser_t"
                required>
                <option>{{ $bus->ser_t }}</option>
                <option value="Normal Service" style="color: #FFA500;">Normal Service (Normal Fare)
                </option>
                <option value="Semi Luxury Service" style="color: #FFA500;">Semi Luxury Service
                    (Normal Fare*1.5)</option>
                <option value="Luxury/AC Service" style="color: #FFA500;">Luxury/AC Service (Normal
                    Fare*2)</option>
                <option value="Super Luxury Service" style="color: #FFA500;">Super Luxury Service
                    (Normal Fare*3)</option>
            </select>
            <br>
        </div>
    </div>

    <div class="row justify-content-around">
        <div class="col-md-8 mb-4">
            <label for="no_of_bus-name" class="col-form-label">No Of Buses:</label>
            <input type="text" class="form-control form-control-lg" name="no_bus" value="{{ $bus->no_bus }}"
                required>
            <br>
        </div>
    </div>

    <div class="row justify-content-around">
        <div class="col-md-8 mb-4">
            <label for="charge-name" class="col-form-label">Minimum Charge Per Kilometer (RS):</label>
            <input type="text" class="form-control form-control-lg" name="charge" value="{{ $bus->charge }}"
                required>
            <br>
        </div>
    </div>

    <br>

    <div class="col-md-12 text-center">
        <input title="Required data can be updated." type="submit" class="btn btn-warning btn-lg" value="UPDATE">
    </div>
</form>
