<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Banner;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $banner = banner::all();
        return view('admin.banner.index',compact('banner'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $banner = banner::all();
        return view('admin.banner.create',compact('banner'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $banner=$request->except('image');
        if($request->hasFile('image')){
            $pathFile= Storage::putFile('banners',$request->file('image'));
            $banner['image']='storage/'.$pathFile;
        }
        Banner::query()->create($banner);
        return redirect()->route('banner.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Banner $banner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Banner $banner)
    {
        //
        $data = $request->except('image');
        if($request->hasFile('image')){
            $pathFile = Storage::putFile('banners',$request->file('image'));
            $data['image']='storage/'.$pathFile;

        }
        $currentImage=$banner->image;
        $banner->update($data);

        if($request->hasFile('image') 
        && $currentImage && file_exists(public_path($currentImage))){
            unlink(public_path($currentImage));
        }
        
        return back();

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Banner $banner)
    {
        //
        $banner->delete();
        if($banner->image && file_exists(public_path($banner->image))
        ){
            unlink(public_path($banner->image));
        }
         
        return redirect()->route('banner.index');
    }
}
