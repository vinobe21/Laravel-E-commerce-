@extends('master')
@section("content")
<div class="custom-product">
    <div class="col-sm-10">
        <div class="trending-wrapper">
            <h4>My orders</h4>
            
            @foreach($orders as $item)
            <div class="row search-item cart-list-gap">
                <div class="col-sm-3">
                    <a href="detail/{{$item->id}}">
                        <img class="trending-image" src="{{$item->gallery}}">
                    </a>
                </div>
                <div class="col-sm-4">
                    <div class="">
                        <h2>Name :{{$item->name}}</h2>
                        <p>Delivery Status : {{$item->status}}</p>
                        <p>Payment Method : {{$item->payment_method}}</p>
                        <p>Payment Status : {{$item->payment_status}}</p>
                        <p>Address : {{$item->address}}</p>
                        
                    </div>
                </div>
                
            </div>            
            @endforeach
        </div>
       
    </div>

</div>
@endsection