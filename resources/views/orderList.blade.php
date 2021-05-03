@extends('master')
@section('content')


<div class="customized-product">


    <div class="col-sm-10">
        <div class="trending-block">
            <h2 class="Cart-Header">You Order List</h2>
            <hr>
            <div class="">
                @foreach ($orders as $item)
                <div class="row searched-item">
                    <div class="col-sm-4">
                        <a href="detail/{{$item->id}}">
                            <img class="trending-img" src="{{$item->gallery}}">
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <div class="">
                            <h3>Name: {{$item->name}}</h3>
                            <h4>Delivery {{$item->status}}</h4>
                            <h4>Address {{$item->address}}</h4>
                            <h4>Payment Status {{$item->payment_status}}</h4>
                            <h4>Paid by {{$item->payment_method}}</h4>

                        </div>
                        </a>
                    </div>
                </div>

                <hr>
                @endforeach

                <hr>

            </div>
        </div>
    </div>

    <div class="Footerpadding">

    </div>
    @endsection