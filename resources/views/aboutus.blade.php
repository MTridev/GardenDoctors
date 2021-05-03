@extends('master')
@section('content')

<style>
.logo {
  font-size: 200px;
}
@media screen and (max-width: 768px) {
  .col-sm-4 {
    text-align: center;
    margin: 25px 0;
  }


}
</style>

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>About Garden Doctors</h2>
      <h4>E commerce Website</h4>
      <p>We sell all types of products and provide Gardening services</p>
      <button class="btn btn-default btn-lg">Get in Touch</button>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-signal logo"></span>
    </div>
  </div>
</div>

<div class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-globe logo"></span>
    </div>
    <div class="col-sm-8">
      <h2>Our Values</h2>
      <h4><strong>MISSION:</strong> To keep the topmost standards..</h4>
      <p><strong>VISION:</strong> Become number 1 in Mauritius..</p>
    </div>
  </div>
</div>


<div class="aboutUspageFooterpadding">

</div>

@endsection