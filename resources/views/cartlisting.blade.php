@extends('master')
@section('content')


<div class="customized-product">


    <div class="col-sm-10">
        <div class="trending-block">
            <h2 class="Cart-Header">Your Cart</h2>
            <hr>
            <div class="">
                @foreach ($products as $item)
                <div class="row searched-item">
                    <div class="col-sm-4">
                        <a href="detail/{{$item->id}}">
                            <img class="trending-img" src="{{$item->gallery}}">
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <div class="">
                            <h3>{{$item->name}}</h3>
                            <h4>{{$item->description}}</h4>
                        </div>
                        </a>
                    </div>

                    <div class="col-sm-4">
                            <a href="/removefromCart/{{$item->cartIdSelect}}" class="btn btn-info btn-lg">
                                <span class="glyphicon glyphicon-remove"></span> Remove from Cart
                            </a>
                    </div>
                </div>

                <hr>
                @endforeach

                <div class="checkoutBtn">
                    <a href="checkoutPage">
                        <span class="glyphicon glyphicon-check" ></span> Proceed to checkout
                    </a>
                </div>

                <hr>

            </div>
        </div>
    </div>
    @endsection