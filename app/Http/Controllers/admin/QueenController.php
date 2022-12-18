<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Queen;

class QueenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $Queens = Queen::all();
        return view('admin/queen/index',['Queens'=>$Queens]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin/queen/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        
        $request->validate([
            'image' => 'required|image|mimes:png,jpg,jpeg|max:2048'
        ]);

        $imageName = time().'.'.$request->image->extension();

        // Public Folder
        $request->image->move(public_path('img/Queen'), $imageName);

        // //Store in Storage Folder
        // $request->image->storeAs('images', $imageName);

        // // Store in S3
        // $request->image->storeAs('images', $imageName, 's3');

       

        $queen = new Queen();
        $queen->name = $request->name;
        $queen->image= $imageName;
        $queen->vote=0;
        $queen->created_at=now();
        $queen->updated_at=now();
        $queen->save();
        $queens = Queen::all();
        return view('admin/queen/index',['queens'=>$queens]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $queen = Queen::where('id',$id)->first();
        return view('admin/queen/edit',['queen'=>$queen]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $queen=Queen::where('id', $id)->first();

      
        $image_path = public_path().'/img/Queen/'.$queen->image;
        unlink($image_path);
        $queen->delete();
         
         return redirect('admin/queen');
    }
}
