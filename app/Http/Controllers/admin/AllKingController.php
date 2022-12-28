<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AllKing;

class AllKingController extends Controller
{
    //
    public function index(){

        $allkings = AllKing::all();
        return view('admin/allking/index',['allkings'=>$allkings]);
    }
}
