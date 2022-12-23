
@extends('layouts.app')

@section('content')

<div class="container">
    <h1 class="ff-tanger">All Queens List</h1>
<div class="grid">
    

    @forelse ($allqueens as $allqueen)

    <!-- ForElse is a ForEach loop, but with extra handling for empty array. -->
    
    <div class="stacked">
          
          <div class="card__content">
            <h2 class="card__title">{{$allqueen->roll_number}}</h2>
            <p>{{ $allqueen->vote }}</p>

               
          </div>
        </div>


       
    @empty

    <p>no all queens found</p>
     
    @endforelse

    @endsection


  

    </div>
</div>