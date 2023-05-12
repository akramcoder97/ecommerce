@extends('master')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img class="detail-image" src="{{$product->gallery}}" alt="">
            </div>
            <div class="col-sm-6">
                <a href="/">retour</a>
                <h2>{{$product->name}}</h2>
                <h4 class="text-muted">category : {{$product->category}}</h4>
                <h3>prix : {{$product->price}}</h3>
                <h4>details : {{$product->description}}</h4>
                <br><br>
                <form action="/add_to_cart" method="POST">
                    @csrf
                    <input type="hidden" name="product_id" value="{{$product->id}}">
                   <button class="btn btn-primary">Ajouter au panier</button>  
                </form>
                <button class="btn btn-success">Acheter maintenant</button>
            </div>
        </div>
    </div>
@endsection