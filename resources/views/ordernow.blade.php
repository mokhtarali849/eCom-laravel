@extends('master')
@section('content')

<div class="custom-product">
    <div class="col-sm-10">
        <table class="table">
        <tbody>
        <tr>
            <td>Amount</td>
            <td>Rs {{$total}}</td>
        </tr>
        <tr>
            <td>Tax</td>
            <td>Rs 0</td>
        </tr>
        <tr>
            <td>Delivery</td>
            <td>Rs 10</td>
        </tr>
        <tr>
            <td>Total Amount</td>
            <td>Rs {{$total+10}}</td>
        </tr>
        </tbody>
    </table>
    <div>
        <form action="/orderplace" method="POST">
            @csrf
            <div class="form-group">
                <textarea name="address" placeholder="Enter Your Address" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="pwd">Payment Method</label><br><br>
                <input type="radio" value="cash" name="payment"><span> Online Payment</span><br><br>
                <input type="radio" value="cash" name="payment"><span> EMI Payment  </span><br><br>
                <input type="radio" value="cash" name="payment"><span> Cash On Delivery</span><br><br>
            </div>
            <button type="submit" class="btn btn-success">Order Now</button>
        </form> 
    </div>    
    </div>
</div>


@endsection