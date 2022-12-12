<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\King;
use App\Models\User;
use Auth;

class Kings extends Component
{
    public $kings;

    public function mount()
    {
        $this->kings = King::all();
    
    }

    public function render()
    {
        return view('livewire.king');        
    }

    public function addToVote($king_id)
    {
        // increaseing vote count for king
        $king = King::findOrFail($king_id);
        $king->vote++;
        $king->save();
      
        $user = User::find(Auth::id());
        $user->categories()->attach($king_id);
        $kings = King::all();
        return redirect('king/voted',['kings'=>$kings]) ;
    }
}
