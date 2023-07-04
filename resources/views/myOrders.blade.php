@extends('master')


@section('content')
<div class= "custom-product">
  <h3 class="ms-4">mes commandes:</h3><br>
    <div class="ms-5" style="width: 70%;">
        
        <div class="trending-wrape">
            
            @foreach ($orders as $item)
                <div class="text-center row searched-item border-bottom mb-2 col-sm-12">
                    <div class="trending-content m-2 col-sm-2">
                        <a href="/detail/{{$item->id}}">
                            <img class="trending-img" src="{{$item->gallery}}" alt="Chania">
                        </a>
                    </div>
                    <div class="text-center trending-content col-sm-9">
                        <a href="/detail/{{$item->id}}">
                            <div class="text-dark ms-5 mb-5">
                                <h3>{{$item->name}}</h3>
                                <p>{{$item->description}}</p>
                                <p>delivey status: {{$item->status}}</p>
                                <p>address: {{$item->address}}</p>
                                <p>payment status: {{$item->payment_status}}</p>
                                <p>payment method: {{$item->payment_meyhod}}</p>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach 
        </div> 
    </div>
    </div>
 @endsection