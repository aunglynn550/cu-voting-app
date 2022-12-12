<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class VotedController extends Controller
{
    //
    public function index()
    {
        $user = User::find(Auth::id());
        return view('voted',['user'=>$user]);
    }
}
