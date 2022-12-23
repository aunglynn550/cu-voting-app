<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Queen;
use App\Models\User;
use Auth;
class Queens extends Component
{
    
    public $queens;

    public function mount()
    {
        $this->queens = Queen::all();
      
    }
    public function render()
    {
        return view('livewire.queen');
    }
    public function addToVote($queen_id)
    {
        $queen = Queen::findOrFail($queen_id);
        $queen->vote++;
        $queen->save();

        
        $user = User::find(Auth::id());
        $user->categories()->attach(2);
        $queens = Queen::all();
        return redirect('queen/voted',['queens'=>$queens]) ;

        

    }
}
