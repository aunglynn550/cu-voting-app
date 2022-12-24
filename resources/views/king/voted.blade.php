@extends('layouts.app')


@section('content')
<div class="container">
<h1>Kings</h1>
    <div class="product-grid">
    

    @foreach ($kings as $king)

    <!-- ForElse is a ForEach loop, but with extra handling for empty array. -->
  
    <div class="card voted">
          <img src="/img/King/{{ $king->image }}" alt="" class="card__img">
          <div class="card__content">
            <h2 class="card__title">{{$king->name}} </h2>
            <p class="star"></p>
            <p class="count">{{ $king->vote }}</p>
             
          </div>
        </div>
   
    @endforeach

    </div>
</div>
@endsection
