<div class="container">
    <h1>Kings</h1>
    <div class="product-grid">
    

    @forelse ($kings as $king)

    <!-- ForElse is a ForEach loop, but with extra handling for empty array. -->
    
    <div class="card stacked">
          <img src="/img/King/{{ $king->image }}" alt="" class="card__img">
          <div class="card__content">
            <h2 class="card__title">{{$king->name}}</h2>
            <p>{{ $king->vote }}</p>
            
                    <form wire:submit.prevent="addToVote({{ $king->id }})" method="GET">
                        @csrf
            <div class="btn">
                        <button class="button" type="submit"
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Vote
                        </button>
            </div>
                     
                    </form>
               
          </div>
        </div>


       
    @empty
     
    @endforelse


  

    </div>
</div>