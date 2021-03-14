@extends('master')
@section('content')


<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <img class="img-productDetail" src="{{$productDetail['gallery']}}" alt="">
        </div>
        <div class="col-sm-6">

            
            <a href="/">
                <button type="button" class="btn btn-default" aria-label="Left Align">
                    <span class="glyphicon glyphicon glyphicon-home" aria-hidden="true"></span>
                </button>
            </a>

            <h2>Brand : {{$productDetail['name']}}</h2>
            <h3>Price : Rs {{$productDetail['price']}}</h3>
            <h5>Category : {{$productDetail['category']}}</h5>
            <h5>Description : {{$productDetail['description']}}</h5>

            <a href="/">
                <button type="button">
                    <span class="glyphicon glyphicon-shopping-cart"></span>
                </button>
            </a>

            </br></br>
            <button class="btn btn-primary">Buy Now</button>



        </div>
    </div>


</div>
@endsection