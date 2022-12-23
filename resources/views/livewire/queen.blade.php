
<div class="container">

<div class="product-grid">


@forelse ($queens as $queen)

<!-- ForElse is a ForEach loop, but with extra handling for empty array. -->

<div class="card stacked">
      <img src="/img/Queen/{{ $queen->image }}" alt="" class="card__img">
      <div class="card__content">
        <h2 class="card__title">{{$queen->name}} </h2>
        <p>{{ $queen->vote }}</p>
        <p class="card__description">Iure, voluptate corrupti.</p>
       
                <form wire:submit.prevent="addToVote({{ $queen->id }})" method="POST">
                    @csrf
        <div class="btn">
                    <button class="add-to-cart" type="submit"
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
