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
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">Garden Doctors</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="/">Home</a></li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Services <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Lawn Caring</a></li>
                            <li><a href="#">Outdoor Lighting</a></li>
                            <li><a href="#">Synthetic Grass</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Book service</a></li>
                        </ul>
                    </li>

                    <li><a href="/">About Us</a></li>

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
                            <li><a href="#">Page 1-2</a></li>
                            <li><a href="#">Page 1-3</a></li>
                        </ul>
                    </li>
                    @else
                    <li><a href="/login">Login</a></li>
                    @endif

                    <li><a href="#">Cart({{$total}})</a></li>

                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>



</div>