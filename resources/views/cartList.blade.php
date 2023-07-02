@extends('master')


@section('content')
<div class= "custom-product">
  <h3 class="ms-4">resultas des produits:</h3><br>
  <a class="ms-4 btn btn-success" href="orderNow">Commander maintenat</a><br><br>
    <div class="ms-5" style="width: 70%;">
        
        <div class="trending-wrape">
            
            @foreach ($products as $item)
                <div class="text-center row searched-item border-bottom mb-2 ">
                    <div class="trending-content m-2 col-sm-2">
                        <a href="/detail/{{$item->id}}">
                            <img class="trending-img" src="{{$item->gallery}}" alt="Chania">
                        </a>
                    </div>
                    <div class="text-center trending-content ms-2 col-sm-3">
                        <a href="/detail/{{$item->id}}">
                            <div class="text-dark mb-5">
                                <h3>{{$item->name}}</h3>
                                <p>{{$item->description}}</p>
                            </div>
                        </a>
                    </div>
                    <div class="trending-content col-sm-2">
                        <div class="my-auto">
                            <a href="/remove/{{$item->cart_id}}" class="btn btn-danger">suprimer l'article</a>
                        </div>
                    </a>
                    </div>
                </div>
            @endforeach 
        </div> 
    </div>
    </div>
 @endsection