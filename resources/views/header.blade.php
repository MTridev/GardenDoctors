<?php

use App\Http\Controllers\ProductController;

// we set the total to 0 and count it if 
// ever there is a session
$total = 0;
if (Session::has('user')) {
    $total = ProductController::cartItem();
}


?>




<div>




    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">

            <a href="/">
                
                <img src="/images/logo.png" height="100px" width="100px"/>
                
            </a>
                

            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">



                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Product Category <span class="caret"></span></a>
                        
                        <ul class="dropdown-menu">
                            <li><a href="http://127.0.0.1:8000/search?searchInputBox=fork">Forks</a></li>
                            <li><a href="http://127.0.0.1:8000/search?searchInputBox=seed">Seed Varieties</a></li>
                            <li><a href="http://127.0.0.1:8000/search?searchInputBox=pot">Pots</a></li>
                        </ul>
                    </li>


                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Services <span class="caret"></span></a>
                        
                        <ul class="dropdown-menu">
                            <li><a href="http://127.0.0.1:8000/search?searchInputBox=Lig">Outdoor Lighting</a></li>
                            <li><a href="http://127.0.0.1:8000/search?searchInputBox=lawn-m">Lawn Mowing</a></li>
                            <li><a href="http://127.0.0.1:8000/search?searchInputBox=Lawn-C">Gold Lawn Care Program</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="/bookService">Book service</a></li>
                        </ul>
                    </li>

                    <li><a href="/aboutus">About Us</a></li>

                </ul>
                <form action="/search" class="navbar-form navbar-left">
                    <div class="form-group">
                        <input type="text" name="searchInputBox" class="form-control search-box" placeholder="Search">
                    </div>
                    <button type="submit" class="glyphicon glyphicon-search"></button>
                </form>
                <ul class="nav navbar-nav navbar-right">
                    @if(Session::has('user'))
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Welcome {{Session::get('user')['name']}}
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="/logout">Logout</a></li>
                            <li><a href="/orderList">Order List</a></li>
                            <li><a href="#">Bookings detail</a></li>
                            <li><a href="#">Personal Settings</a></li>
                        </ul>
                    </li>
                    <li><a href="/cartlisting">Cart({{$total}})</a></li>

                    @else
                    <li><a href="/register">Register</a></li>
                    <li><a href="/login">Login</a></li>
                    <li><a href="/employeeLogin">Employee Section</a></li>

                    @endif
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>



</div>