<?php

namespace App\Http\Controllers\Queen;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Queen;


class QueenVotedController extends Controller
{
    //
    public function index()
    {
        $queens = Queen::all();
        return view('queen/voted',['queens'=>$queens]);
    }
}
