@extends('master')
@section('content')


<div class="customized-product">


    <div class="col-sm-10">
    <table class="table">

    <tbody>
      <tr>
        <td><h3>Checkout</h3></td>
      </tr>
      <tr>
        <td>Amount</td>
        <td>Rs {{$total}}</td>
      </tr>
      <tr>
        <td>Tax Amount</td>
        <td>Rs {{$tax = $total*0.05}}</td>
      </tr>
    
      <tr>
        <td>Delivery charges</td>
        <td>Rs 500</td>
      </tr>
      <tr>
        <td>Total Amount</td>
        <td>Rs {{$grandTotal = $total + $tax +500}}</td>
      </tr>
    </tbody>
  </table>


  <div>
  <form action="/action_page.php">
  <div class="form-group">
    <input type="text" class="form-control" id="email" placeholder="Enter Delivery Address">
  </div>
  <div class="form-group">
    <label for="paymentMethodLbl">Payment Method:</label>
</br> 
    <input type="radio" name="payment"> <span>Paypal</span>
    <input type="radio" name="payment"> <span>Cash on Delivery</span>

  </div>

  <div class ="bottomBtnCheckout">
    <div class="checkbox">
        <label><input type="checkbox">I agree to Garden Doctors Terms of service</label>
    </div>
    <button type="submit" class="btn btn-default">Make Purchase</button>
  </div>

</form>
  </div>
    </div>
</div>
    @endsection