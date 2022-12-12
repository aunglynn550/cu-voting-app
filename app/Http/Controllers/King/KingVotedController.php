<?php

namespace App\Http\Controllers\King;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\King;
class KingVotedController extends Controller
{
    //
    public function index()
    {
        $kings = King::all();
        return view('king/voted',['kings'=>$kings]);
    }
}
