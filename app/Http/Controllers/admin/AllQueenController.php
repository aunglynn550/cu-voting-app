<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AllQueen;

class AllQueenController extends Controller
{
    //
    public function index(){

        $allqueens = AllQueen::all();
        return view('admin/allqueen/index',['allqueens'=>$allqueens]);
    }
}
