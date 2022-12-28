
@extends('admin.layouts.app')

@section('content')

<div class="container">
    <h1 class="ff-tanger">The Whole Kings List</h1>
<div class="grid">
    

    @forelse ($allkings as $allking)

    <!-- ForElse is a ForEach loop, but with extra handling for empty array. -->
    
    <div class="stacked">
          
          <div class="card__content">
            <h2 class="card__title">{{$allking->roll_number}}</h2>
            <p class="all star"></p>
            <p class="all count">{{ $allking->vote }}</p>

               
          </div>
        </div>


       
    @empty

    <p>no all kings found</p>
     
    @endforelse

    @endsection


  

    </div>
</div>