<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\King;

class KingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $king = King::all();
        return view('admin/king/index',['users'=>$king]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin/king/create');
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
        $request->image->move(public_path('img/King'), $imageName);

        // //Store in Storage Folder
        // $request->image->storeAs('images', $imageName);

        // // Store in S3
        // $request->image->storeAs('images', $imageName, 's3');

       

        $king = new King();
        $king->name = $request->name;
        $king->image= $imageName;
        $king->vote=0;
        $king->created_at=now();
        $king->updated_at=now();
        $king->save();
      

        $king = King::all();
        return view('admin/king/index',['users'=>$king]);

        // $request->validate([
        //     'name'=>'required',
        //     'image'=>'required',
        // ]);
        // $image = $request->file('image');
        // $extension = $image->getClientOriginalExtension();
        // $originalname = $image->getClientOriginalName();
        // $path = $image->move('uploads/media/', $originalname); // REMOVE STR_REPLACE HERE
        // $imgsizes = $path->getSize();
        // $mimetype = $image->getClientMimeType();

        // $picture = new Avatar();
        // $picture->name = $request->name;
        // $picture->filename = str_replace('\'', '/', $path);
        // $picture->save();
        // $data->name = $request->name;
        // return redirect('avatars')->with('successfully created or uploaded image');
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
        $king = King::where('id',$id)->first();
        return view('admin/king/edit',['king'=>$king]);
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
        $king = King::where('id',$id)->first();
        $king->vote= $request->vote;
        $king->save();
        return redirect('admin/king');
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
       $king=King::where('id', $id)->first();

      
       $image_path = public_path().'/img/King/'.$king->image;
       unlink($image_path);
       $king->delete();
        
        return redirect('admin/king');
    }
}
