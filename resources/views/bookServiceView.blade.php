@extends('master')
@section('content')

<h1 class="bookServiceHeader">Book a service</h1>

<div class="container customized-login">
    <div class="row">
        <div class="col-sm-3 col-sm-offset-4">
            <form action='bookService' method='POST'>
                @csrf
                <label for="serviceSelect">Choose a service</label>
                <select class="form-control" id="serviceSelect">
                    <option value="lawnmowing">Lawn Mowing Services</option>
                    <option value="outdoorLighting">Outdoor Lighting Setup</option>
                    <option value="syntheticgrass">Synthetic Grass Laying</option>
                </select>
                <br>

                <label for="firstDatelbl">Desired date and time</label>
                <br>
                <input type="date" id="firstDate" name="Pick First Date">
                <input type="time" id="firstTime" name="Pick First Time">
                <br>
                <br>
                

                <label for="secondDatelbl">Second Desired date and time</label>
                <br>
                <input type="date" id="secondDate" name="Pick Second Date">
                <input type="time" id="secondTime" name="Pick Second Time">
                <br>
                <br>

                <label for="cellPhonelbl">Cell Phone</label>
                <br>

                +230 <input type="number" id="cusCellNumber" name="Enter Cell Phone Number">






                <button type="submit" class="btn btn-primary">Book now</button>
            </form>
        </div>
    </div>

</div>
@endsection