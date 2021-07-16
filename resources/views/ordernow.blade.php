@extends('master')
@section("content")
<div class="custom-product">
    <div class="col-sm-10">
    <table class="table table-striped">
    <tbody>
      <tr>
        <td>Amount</td>
        <td>{{$total}}</td>        
      </tr>
      <tr>
        <td>Tax</td>
        <td>0</td>
      </tr>
      <tr>
        <td>Delivery Charges</td>
        <td>10</td>
      </tr>
      <tr>
        <td>Total</td>
        <td>{{$total+10}}</td>
      </tr>
    </tbody>
  </table>
  <form action="/orderplace" method="POST">
    @csrf
  <div class="form-group">
    <textarea name="address" class="form-control" placeholder="Enter the address" required></textarea>
  </div><br><br>
  <div class="form-group">
    <label>Payment Method</label><br>
    <input type="radio" value="cash" name="payment" ><span>Online Payment</span><br><br>
    <input type="radio" value="cash" name="payment"  ><span>EMI Payment</span><br><br>
    <input type="radio" value="cash" name="payment"  ><span>Pay On Delivery</span><br><br>
  </div><br><br>
  <button type="submit" class="btn btn-default">Order</button>
</form>
    </div>

</div>
@endsection