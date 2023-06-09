@extends('master')


@section('content')
<div class=  "custom-product">


<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

  <!-- Wrapper for slides -->
    <div class="carousel-inner">
        @foreach ($products as $item)
            <div class="image item @if($loop->first) active @endif">
                <img id="image" src="{{$item->gallery}}" alt="Chania">
                <div class="carousel-caption">
                    <h3>{{$item->name}}</h3>
                    <p>{{$item->description}}</p>
                </div>
            </div>
        @endforeach 
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
</div>
<div class="trending-wrapper">
    <h3>trending products</h3>
    <div class="tren">
    @foreach ($products as $item)
            <a href="detail/{{$item->id}}">
                <div class="trending-item">
                    <img id="trending-img" src="{{$item->gallery}}" alt="Chania">
                    <div class="">
                        <h3>{{$item->name}}</h3>
                    </div>
                </div>
            </a>
    @endforeach 
</div>
</div>
</div>
@endsection