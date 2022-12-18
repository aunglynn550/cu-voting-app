<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    public function index()
    {
        //
        $users = User::all();
        return view('admin/users',['users'=>$users]);
    }
    public function edit($id)
    {
        //
        $queen = User::where('id',$id)->first();
        return view('admin/user/edit',['queen'=>$queen]);
    }

}
