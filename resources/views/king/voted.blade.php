@extends('layouts.app')


@section('content')
<div class="container">
    <div class="product-grid">
    

    @foreach ($kings as $king)

    <!-- ForElse is a ForEach loop, but with extra handling for empty array. -->
  
    <div class="card stacked">
          <img src="/img/King/{{ $king->image }}" alt="" class="card__img">
          <div class="card__content">
            <h2 class="card__title">{{$king->name}} </h2>
            <p>{{ $king->vote }}</p>
            <p class="card__description">Iure, voluptate corrupti.</p>     
          </div>
        </div>
   
    @endforeach

    </div>
</div>
@endsection
