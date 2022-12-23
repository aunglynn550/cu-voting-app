@extends('layouts.app')


@section('content')
<div class="container">
    <div class="product-grid">
    

    @foreach ($queens as $queen)

    <!-- ForElse is a ForEach loop, but with extra handling for empty array. -->
  
    <div class="card stacked">
          <img src="/img/Queen/{{ $queen->image }}" alt="" class="card__img">
          <div class="card__content">
            <h2 class="card__title">{{$queen->name}} </h2>
            <p>{{ $queen->vote }}</p>
            <p class="card__description">Iure, voluptate corrupti.</p>     
          </div>
        </div>
   
    @endforeach

    </div>
</div>
@endsection
