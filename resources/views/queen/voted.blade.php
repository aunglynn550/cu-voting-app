@extends('layouts.app')


@section('content')
<div class="container">
<h1>Queens</h1>
    <div class="product-grid">
    

    @foreach ($queens as $queen)

    <!-- ForElse is a ForEach loop, but with extra handling for empty array. -->
  
    <div class="card voted">
          <img src="/img/Queen/{{ $queen->image }}" alt="" class="card__img">
          <div class="card__content">
            <h2 class="card__title">{{$queen->name}} </h2>
            <p class="star"></p>
            <p class="count">{{ $queen->vote }}</p>
              
          </div>
        </div>
   
    @endforeach

    </div>
</div>
@endsection
