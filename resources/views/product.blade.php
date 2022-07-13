@extends('master')
@section('content')

<div class="custom-product">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            @foreach ($products as $product)
                <div class="carousel-item {{$product['id'] == 1 ? 'active':''}}">
                    <img class="d-block w-100 slider-img" src="https://images.pexels.com/photos/1092644/pexels-photo-1092644.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="First slide">
                    <div class="carousel-caption">
                        <h3>{{$product['name']}}</h3>
                        <p>{{$product['description']}}</p>
                    </div>
                </div>
            @endforeach  
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
</div>


@endsection