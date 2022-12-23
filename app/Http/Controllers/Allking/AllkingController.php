<?php

namespace App\Http\Controllers\Allking;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Allking;
use Auth;
use App\Models\User;

class AllkingController extends Controller
{
    //
    public function index(){
        $allkings= Allking::orderBy('vote','desc')->get();
        return view('allking/index',['allkings'=>$allkings]);
    }

public function voteallking(){
    return view('allking/voteallking');
}
    
    public function vote(Request $re){
       
        $roll_no=$re->roll_no;
        // return $roll_no;
        
        $allking = AllKing::where('roll_number',$roll_no)->first();
        if($allking){
            $allking->vote++;
            $allking->save();
            $user = User::find(Auth::id());
            $user->categories()->attach(3);
            return redirect('allking/show');
        }
        $allking = new Allking();
        $allking->roll_number = $re->roll_no;
        $allking->vote++;
        $allking->save();
        $user = User::find(Auth::id());
        $user->categories()->attach(3);
        return redirect('allking/show');
    }
}
