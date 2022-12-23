<?php

namespace App\Http\Controllers\Allqueen;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Allqueen;
use Auth;
use App\Models\User;

class AllqueenController extends Controller
{
    //
    public function index(){
        $allqueens= Allqueen::orderBy('vote','desc')->get();
        return view('allqueen/index',['allqueens'=>$allqueens]);
    }

public function voteallqueen(){
    return view('allqueen/voteallqueen');
}
    
    public function vote(Request $re){
       
        $roll_no=$re->roll_no;
        // return $roll_no;
        
        $allqueen = Allqueen::where('roll_number',$roll_no)->first();
        if($allqueen){
            $allqueen->vote++;
            $allqueen->save();
            $user = User::find(Auth::id());
            $user->categories()->attach(4);
            return redirect('allqueen/show');
        }
        $allqueen = new Allqueen();
        $allqueen->roll_number = $re->roll_no;
        $allqueen->vote++;
        $allqueen->save();
        $user = User::find(Auth::id());
        $user->categories()->attach(4);
        return redirect('allqueen/show');
    }
}
