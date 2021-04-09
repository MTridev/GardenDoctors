@extends('master')
@section('content')


<div class="container customized-login">
    <div class="row">
        <div class="col-sm-3 col-sm-offset-4">
            <form action='register' method='POST'>
            @csrf
                <div class="form-group">
                    <label>User Name</label>
                    <input type="text" name="name" class="form-control"  aria-describedby="emailHelp" placeholder="Enter User name">
                </div>
                <div class="form-group">
                    <label>Email address</label>
                    <input type="email" name="email" class="form-control"  aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password">
                </div>

                <button type="submit" class="btn btn-primary">Register now</button>
            </form>
        </div>
    </div>

</div>
@endsection