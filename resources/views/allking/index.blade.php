
@extends('layouts.app')

@section('content')

<div class="container">
    <h1 class="ff-tanger">All Kings List</h1>
    <div class="product-grid">
    

    @forelse ($allkings as $allking)

    <!-- ForElse is a ForEach loop, but with extra handling for empty array. -->
    
    <div class="card stacked">
          
          <div class="card__content">
            <h2 class="card__title">{{$allking->roll_number}}</h2>
            <p>{{ $allking->vote }}</p>

               
          </div>
        </div>


       
    @empty

    <p>no all kings found</p>
     
    @endforelse

    @endsection


  

    </div>
</div>